<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BuildCommand extends Command
{
    protected static $defaultName = 'markdown:build';

    /**
     * @var bool
     */
    protected $isDebug = false;

    /**
     * @var string
     */
    protected $title = 'Список полезных команд';

    /**
     * @var string
     */
    protected $root;

    /**
     * @var string
     */
    protected $data = '';

    protected $slugifyCache = [];

    public function __construct(string $root)
    {
        $this->root = $root;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Build markdown encyclopedia.')
            ->setHelp('Build markdown encyclopedia.')
            ->addOption(
                'debug',
                null,
                InputOption::VALUE_NONE,
                'Use debug mode'
            )
            ->addOption(
                'path',
                null,
                InputOption::VALUE_REQUIRED,
                'Markdown sources directory',
                $this->root.DIRECTORY_SEPARATOR.'files'
            )
            ->addOption(
                'output',
                null,
                InputOption::VALUE_REQUIRED,
                'Output file',
                $this->root.DIRECTORY_SEPARATOR.'README.md'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->isDebug = $input->getOption('debug');

        if (mb_strpos($input->getOption('path'), '/') === 0) {
            $this->root = $input->getOption('path');
        } else {
            $this->root .= $input->getOption('path');
        }

        $this->build($this->root);
        $this->makeHeader();

        file_put_contents(
            $input->getOption('output'),
            $this->data
        );
    }

    protected function build($path)
    {
        foreach (glob($path.'/*.md') as $file) {
            if ($this->isDebug) {
                $this->data .= "\n[//]: # ({$file})";
            }
            $this->data .= "\n".file_get_contents($file);
            $dir = strstr($file, '.md', true);

            if (is_dir($dir)) {
                $this->data .= $this->build($dir);
            } else {
                if (preg_match('/>\s*$/', $this->data) !== false) {
                    $this->data .= "\n";
                }
                $this->data .= '[Back to top](#'.$this->slugify($this->title).")\n***";
            }
        }
    }

    protected function slugify($value = '') {
        $value = mb_strtolower($value);

        $replaces = [
            '/ /' => '-',
            '/%([abcdef]|\d){2,2}/' => '',
            '/[\/?!:\[\]`.,()*"\';{}+=<>~$|#@&]/' => '',
            '/[。？！，、；：“”【】（）〔〕［］﹃﹄“ ”‘’﹁﹂—…－～《》〈〉「」]/' => '',
        ];

        foreach ($replaces as $pattern => $replacement) {
            $value = preg_replace($pattern, $replacement, $value);
        }
        return urlencode($value);
    }

    protected function makeHeader(): void
    {
        $header = '';
        preg_match_all('/^(##+) (.*)$/m', $this->data, $matches, PREG_SET_ORDER);

        foreach ($matches as $item) {
            $header .=
                str_repeat('  ', strlen($item[1]) - 2).
                '- ['.$item[2].'](#'.$this->slugify($item[2]).")\n";
        }

        $this->data = implode("\n", [
            '# '.$this->title,
            $header,
            $this->data,
        ]);
    }
}



