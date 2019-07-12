# Список полезных команд
- [Linux](#x)
  - [Вывод версии дистрибутива](#%D0%B2%D1%D0%B2%D0%BE%D0%B4-%D0%B2%D0%B5%D1%D1%D0%B8%D0%B8-%D0%B4%D0%B8%D1%D1%D1%D0%B8%D0%B1%D1%D1%D0%B8%D0%B2%D0%B0)
  - [Дерево процессов](#%D0%B4%D0%B5%D1%D0%B5%D0%B2%D0%BE-%D0%BF%D1%D0%BE%D1%86%D0%B5%D1%D1%D0%BE%D0%B2)
  - [Поиск процесса занимающего порт](#%D0%BF%D0%BE%D0%B8%D1%D0%BA-%D0%BF%D1%D0%BE%D1%86%D0%B5%D1%D1%D0%B0-%D0%B7%D0%B0%D0%D0%B8%D0%D0%B0%D1%8E%D1%D0%B5%D0%B3%D0%BE-%D0%BF%D0%BE%D1%D1)
  - [Фоновый процесс](#%D1%D0%BE%D0%D0%BE%D0%B2%D1%D0-%D0%BF%D1%D0%BE%D1%86%D0%B5%D1%D1)
  - [Работа с фоновыми процессами](#%D1%D0%B0%D0%B1%D0%BE%D1%D0%B0-%D1-%D1%D0%BE%D0%D0%BE%D0%B2%D1%D0%D0%B8-%D0%BF%D1%D0%BE%D1%86%D0%B5%D1%D1%D0%B0%D0%D0%B8)
    - [Ctrl + Z - приостановить и свернуть задачу](#--z---%D0%BF%D1%D0%B8%D0%BE%D1%D1%D0%B0%D0%D0%BE%D0%B2%D0%B8%D1%D1-%D0%B8-%D1%D0%B2%D0%B5%D1%D0%D1%D1%D1-%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D1)
  - [Добавление для ${USERNAME} возможности вызывать sudo](#%D0%B4%D0%BE%D0%B1%D0%B0%D0%B2%D0%D0%B5%D0%D0%B8%D0%B5-%D0%B4%D0%D1%8F--%D0%B2%D0%BE%D0%B7%D0%D0%BE%D0%B6%D0%D0%BE%D1%D1%D0%B8-%D0%B2%D1%D0%B7%D1%D0%B2%D0%B0%D1%D1-)
  - [Смена владельца на user2 у файлов с владельцем user1](#%D1%D0%D0%B5%D0%D0%B0-%D0%B2%D0%D0%B0%D0%B4%D0%B5%D0%D1%D1%86%D0%B0-%D0%D0%B0--%D1-%D1%D0%B0%D0%D0%D0%BE%D0%B2-%D1-%D0%B2%D0%D0%B0%D0%B4%D0%B5%D0%D1%D1%86%D0%B5%D0-)
  - [Смена группы на user2 у файлов с группой user1](#%D1%D0%D0%B5%D0%D0%B0-%D0%B3%D1%D1%D0%BF%D0%BF%D1-%D0%D0%B0--%D1-%D1%D0%B0%D0%D0%D0%BE%D0%B2-%D1-%D0%B3%D1%D1%D0%BF%D0%BF%D0%BE%D0-)
  - [Утилита поиска DNS](#%D1%D1%D0%B8%D0%D0%B8%D1%D0%B0-%D0%BF%D0%BE%D0%B8%D1%D0%BA%D0%B0-)
  - [Порты](#%D0%BF%D0%BE%D1%D1%D1)
    - [Проверка](#%D0%BF%D1%D0%BE%D0%B2%D0%B5%D1%D0%BA%D0%B0)
    - [Открытие](#%D0%BE%D1%D0%BA%D1%D1%D1%D0%B8%D0%B5)
  - [Стандартная HTTP авторизация](#%D1%D1%D0%B0%D0%D0%B4%D0%B0%D1%D1%D0%D0%B0%D1%8F--%D0%B0%D0%B2%D1%D0%BE%D1%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F)
- [Vim](#v)
  - [Runtime команды](#-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4%D1)
  - [Конфигурационный файл Vim](#%D0%BA%D0%BE%D0%D1%D0%B8%D0%B3%D1%D1%D0%B0%D1%86%D0%B8%D0%BE%D0%D0%D1%D0-%D1%D0%B0%D0%D0-v)
- [SSH](#n-a)
  - [Генерация SSH ключей](#%D0%B3%D0%B5%D0%D0%B5%D1%D0%B0%D1%86%D0%B8%D1%8F--%D0%BA%D0%D1%8E%D1%87%D0%B5%D0)
  - [Конфигурационный файл SSH](#%D0%BA%D0%BE%D0%D1%D0%B8%D0%B3%D1%D1%D0%B0%D1%86%D0%B8%D0%BE%D0%D0%D1%D0-%D1%D0%B0%D0%D0-)
  - [SSH туннель](#-%D1%D1%D0%D0%D0%B5%D0%D1)
- [macOS X](#-x)
  - [Mac OS Programms](#--)
  - [Dock separator](#-)
- [Nginx](#x)
  - [Прокидка ссылок на файлы со staging'а на production](#%D0%BF%D1%D0%BE%D0%BA%D0%B8%D0%B4%D0%BA%D0%B0-%D1%D1%D1%D0%D0%BE%D0%BA-%D0%D0%B0-%D1%D0%B0%D0%D0%D1-%D1%D0%BE-%D0%B0-%D0%D0%B0-)
- [Database](#n-a)
  - [MySQL](#y)
    - [Database dump (MySQL)](#--y)
    - [Запись в БД из файла (MySQL)](#%D0%B7%D0%B0%D0%BF%D0%B8%D1%D1-%D0%B2-%D0%B1%D0%B4-%D0%B8%D0%B7-%D1%D0%B0%D0%D0%D0%B0-y)
  - [PostgreSQL](#n-a)
    - [Создание БД](#%D1%D0%BE%D0%B7%D0%B4%D0%B0%D0%D0%B8%D0%B5-%D0%B1%D0%B4)
    - [Database dump (PostgreSQL)](#--)
    - [Запись в БД из файла (PostgreSQL)](#%D0%B7%D0%B0%D0%BF%D0%B8%D1%D1-%D0%B2-%D0%B1%D0%B4-%D0%B8%D0%B7-%D1%D0%B0%D0%D0%D0%B0-)
    - [Получение ссылок на поле таблицы (PostgreSQL)](#%D0%BF%D0%BE%D0%D1%D1%87%D0%B5%D0%D0%B8%D0%B5-%D1%D1%D1%D0%D0%BE%D0%BA-%D0%D0%B0-%D0%BF%D0%BE%D0%D0%B5-%D1%D0%B0%D0%B1%D0%D0%B8%D1%86%D1-)
- [Python](#y)
  - [Virtualenv](#vv)
    - [Install virtualenv](#-vv)
    - [Create virtualenv](#-vv)
    - [Activate virtualenv](#v-vv)
- [Git](#n-a)
  - [Создание алиаса для вывода дерева коммитов](#%D1%D0%BE%D0%B7%D0%B4%D0%B0%D0%D0%B8%D0%B5-%D0%B0%D0%D0%B8%D0%B0%D1%D0%B0-%D0%B4%D0%D1%8F-%D0%B2%D1%D0%B2%D0%BE%D0%B4%D0%B0-%D0%B4%D0%B5%D1%D0%B5%D0%B2%D0%B0-%D0%BA%D0%BE%D0%D0%D0%B8%D1%D0%BE%D0%B2)
  - [Удаление игнорируемых файлов](#%D1%D0%B4%D0%B0%D0%D0%B5%D0%D0%B8%D0%B5-%D0%B8%D0%B3%D0%D0%BE%D1%D0%B8%D1%D1%D0%B5%D0%D1%D1%85-%D1%D0%B0%D0%D0%D0%BE%D0%B2)
  - [Откат изменений в удаленном хранилище](#%D0%BE%D1%D0%BA%D0%B0%D1-%D0%B8%D0%B7%D0%D0%B5%D0%D0%B5%D0%D0%B8%D0-%D0%B2-%D1%D0%B4%D0%B0%D0%D0%B5%D0%D0%D0%BE%D0-%D1%85%D1%D0%B0%D0%D0%B8%D0%D0%B8%D1%D0%B5)
  - [Patch из нескольких коммитов](#-%D0%B8%D0%B7-%D0%D0%B5%D1%D0%BA%D0%BE%D0%D1%D0%BA%D0%B8%D1%85-%D0%BA%D0%BE%D0%D0%D0%B8%D1%D0%BE%D0%B2)
  - [Переименование ветки](#%D0%BF%D0%B5%D1%D0%B5%D0%B8%D0%D0%B5%D0%D0%BE%D0%B2%D0%B0%D0%D0%B8%D0%B5-%D0%B2%D0%B5%D1%D0%BA%D0%B8)
  - [Удаление ветки](#%D1%D0%B4%D0%B0%D0%D0%B5%D0%D0%B8%D0%B5-%D0%B2%D0%B5%D1%D0%BA%D0%B8)
  - [Переименование тега](#%D0%BF%D0%B5%D1%D0%B5%D0%B8%D0%D0%B5%D0%D0%BE%D0%B2%D0%B0%D0%D0%B8%D0%B5-%D1%D0%B5%D0%B3%D0%B0)
  - [Клонирование ветки](#%D0%BA%D0%D0%BE%D0%D0%B8%D1%D0%BE%D0%B2%D0%B0%D0%D0%B8%D0%B5-%D0%B2%D0%B5%D1%D0%BA%D0%B8)
  - [Клонирование сабмодулей](#%D0%BA%D0%D0%BE%D0%D0%B8%D1%D0%BE%D0%B2%D0%B0%D0%D0%B8%D0%B5-%D1%D0%B0%D0%B1%D0%D0%BE%D0%B4%D1%D0%D0%B5%D0)
  - [Удаление из индекса](#%D1%D0%B4%D0%B0%D0%D0%B5%D0%D0%B8%D0%B5-%D0%B8%D0%B7-%D0%B8%D0%D0%B4%D0%B5%D0%BA%D1%D0%B0)
  - [Подделка даты коммита](#%D0%BF%D0%BE%D0%B4%D0%B4%D0%B5%D0%D0%BA%D0%B0-%D0%B4%D0%B0%D1%D1-%D0%BA%D0%BE%D0%D0%D0%B8%D1%D0%B0)
  - [Перезапись "Initial commit"](#%D0%BF%D0%B5%D1%D0%B5%D0%B7%D0%B0%D0%BF%D0%B8%D1%D1--)
  - [Git Flow](#-w)


## Linux

### Вывод версии дистрибутива
```bash
lsb_release -a
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Дерево процессов
```bash
ps -e -o pid,args --forest
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Поиск процесса занимающего порт
```bash
netstat -vanp tcp | grep 8000
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Фоновый процесс
```bash
{command} > {process_log_file | /dev/null} 2>&1 &
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Работа с фоновыми процессами
#### Ctrl + Z - приостановить и свернуть задачу
**Список задач**
```bash
jobs
```
**Вывести задачу на передний план**
```bash
fg {group}
```
**Убрать задачу на задний план**
```bash
bg {group}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Добавление для ${USERNAME} возможности вызывать sudo
```bash
sudo usermod -a -G sudo ${USERNAME}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Смена владельца на user2 у файлов с владельцем user1
```bash
find ./ -user user1 -exec chown user2 {} +
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Смена группы на user2 у файлов с группой user1
```bash
find ./ -group group1 -exec chown :group2 {} +
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Утилита поиска DNS
```bash
dig {domain} [any | A | MX | TXT | NS | SOA]
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Порты

#### Проверка
```bash
ss -nap | grep :{port}
```
```bash
# for mac:
lsof -n -i:{port} | grep LISTEN
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Открытие
```bash
iptables -I INPUT -p tcp -m tcp --dport 53 -j ACCEPT
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Стандартная HTTP авторизация
```bash
htpasswd -c {filename} {username}
```
e.g.
```bash
htpasswd -c .htpasswd finagin
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## Vim

### Runtime команды
Включить нумерацию строк
```bash
:set nu
```
Переключить кодировку
```bash
:e ++enc=cp1251
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Конфигурационный файл Vim
<details>
  <summary>~/.vimrc</summary>
	
```conf
" Configuration file for vim
set modelines=0		" CVE-2007-2438

" Normally we use vim-extensions. If you want true vi-compatibility
" remove change the following statements
set nocompatible	" Use Vim defaults instead of 100% vi compatibility
set backspace=2		" more powerful backspacing
set clipboard=unnamedplus
" Don't write backup file if vim is being called by "crontab -e"
au BufWrite /private/tmp/crontab.* set nowritebackup nobackup
" Don't write backup file if vim is being called by "chpass"
au BufWrite /private/etc/pw.* set nowritebackup nobackup

let skip_defaults_vim=1

" Use the Solarized Dark theme
set background=dark
set encoding=utf-8 nobomb

" Centralize backups, swapfiles and undo history
set backupdir=~/.vim/backups
set directory=~/.vim/swaps
if exists("&undodir")
	set undodir=~/.vim/undo
endif

" Don’t create backups when editing files in certain directories
set backupskip=/tmp/*,/private/tmp/*

" Enable line numbers
set number

" Enable syntax highlighting
syntax on

" Highlight current line
set cursorline

" Make tabs as wide as two spaces
set tabstop=2

" Show “invisible” characters
"set lcs=tab:~,trail:·,nbsp:_
"set list

" Highlight searches
set hlsearch

" Highlight dynamically as pattern is typed
set incsearch

" Enable mouse in all modes
set mouse=a

" Show the cursor position
set ruler

" Show the current mode
set showmode

" Show the filename in the window titlebar
set title

" Show the (partial) command as it’s being typed
set showcmd
```
</details>

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## SSH

### Генерация SSH ключей
```bash
ssh-keygen -t {type} -b {bits} -C {comment} -f {file_name}
```
e.g.
```bash
ssh-keygen -t rsa -b 16384 -C "baby@ovh.ft-ru.ru" -f ~/.ssh/baby
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Конфигурационный файл SSH
<details>
  <summary>~/.ssh/config</summary>
	
```conf
Host *
    UseKeychain     yes

Include config.d/*
```
</details>
<details>
  <summary>~/.ssh/config.d/VCS</summary>
	
```conf
# Custom ssh key for bitbucket
Hostbitbucket.org
	Hostname	bitbucket.org
	IdentityFile	~/.ssh/no_pass

# Custom ssh key for bitbucket
Host github.com
	Hostname	github.com
	IdentityFile	~/.ssh/id_rsa
```
</details>
<details>
  <summary>~/.ssh/config.d/Projects</summary>

```conf
Host application-load-balancer
	Horstname	192.168.0.10
	IdentityFile	~/.ssh/secure
Host application-web-1
	Horstname	192.168.0.30
	IdentityFile	~/.ssh/no_pass
	ProxyJump	application-load-balancer
Host application-web-2
	Horstname	192.168.0.31
	IdentityFile	~/.ssh/no_pass
	ProxyJump	application-load-balancer
Host application-database
	Horstname	192.168.0.20
	IdentityFile	~/.ssh/no_pass
	ProxyJump	application-load-balancer
```
</details>

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### SSH туннель
```bash
ssh -L 8080:localhost:80 192.168.0.10
```

[more information ↑](https://habr.com/post/331348/)

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## macOS X

### Mac OS Programms
* [Etcher](https://etcher.io) by [resin.io](https://resin.io) -- создаени загрузочной USB

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Dock separator
```bash
defaults write com.apple.dock persistent-apps -array-add '{tile-data={}; tile-type="spacer-tile";}';
killall Dock;
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## Nginx

### Прокидка ссылок на файлы со staging'а на production
```
server {
    ...
    location ~* \.(jpg|jpeg|gif|png)$ {
        if (!-f $request_filename) {
            rewrite ^/images/(.*) http://example.com/images/$1 break;
         }
    }
    ...
}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## Database

### MySQL

#### Database dump (MySQL)
```bash
mysqldump -u {username} -p {database_name} [--tables {table}] [--where="{query}"] > {outputfile}
```
e.g.
```bash
mysqldump -u utalents-test -p utalents-test > "utalents-test_(date +"%Y-%m-%d_%H-%M-%S").sql"
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Запись в БД из файла (MySQL)
```bash
mysql -u {username} -p {database_name} < {inputfile}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### PostgreSQL

#### Создание БД
```bash
psql postgres
```
```sql
CREATE DATABASE {db_name};
CREATE USER {user_name} WITH password '{password}';
GRANT ALL ON DATABASE {db_name} TO {user_name};
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Database dump (PostgreSQL)
```bash
pg_dump -U {username} {database_name} > {outputfile}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Запись в БД из файла (PostgreSQL)
```bash
psql -U {username} {database_name} < {inputfile}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Получение ссылок на поле таблицы (PostgreSQL)
<details>
  <summary>SQL</summary>
  
  ```SQL
  SELECT
    tc.table_name
    , kcu.column_name
    , tc.table_schema
    , ccu.table_schema AS foreign_table_schema
    , ccu.table_name   AS foreign_table_name
    , ccu.column_name  AS foreign_column_name
    , rk.delete_rule   AS on_delete --strategy
    , tc.constraint_name
  FROM
    information_schema.table_constraints AS tc
    JOIN information_schema.key_column_usage AS kcu
      ON kcu.constraint_name = tc.constraint_name
         AND kcu.constraint_schema = tc.constraint_schema
    JOIN information_schema.constraint_column_usage AS ccu
      ON ccu.constraint_name = tc.constraint_name
         AND ccu.constraint_schema = tc.constraint_schema
    JOIN information_schema.referential_constraints AS rk
      ON rk.constraint_name = tc.constraint_name
         AND rk.constraint_schema = tc.constraint_schema
  WHERE
    tc.constraint_type = 'FOREIGN KEY'
    AND ccu.table_name = 'resolution_to'  -- Таблица
    AND ccu.column_name = 'id'            -- Поле
  ;
  ```
</details>

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## Python

### Virtualenv

#### Install virtualenv
```bash
sudo pip install virtualenv
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Create virtualenv
```bash
virtualenv --no-site-packages --prompt="({project_name})" {venv_name}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
#### Activate virtualenv
```bash
source {path_to_project}/{venv_name}/bin/activate
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
## Git

### Создание алиаса для вывода дерева коммитов
```bash
git config --global alias.tree "log --oneline --decorate --all --graph"
```
**Usage:**
```bash
git tree
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Удаление игнорируемых файлов
```bash
git clean -Xdfe .idea # -e .idea — игнорировать папку .idea
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Откат изменений в удаленном хранилище
```bash
git reset --hard {commit}
git push --force
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Patch из нескольких коммитов
```bash
git diff {older_commit}..{younger_commit} > my-patch.patch
```
e.g.
```bash
git diff HEAD~2..HEAD > my-patch.patch
```
or
```bash
git diff bea1ccb..b028577 > my-patch.patch
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Переименование ветки
```bash
git branch -m {old_branch} {new_branch}         # Rename branch locally    
git push origin :{old_branch}                   # Delete the old branch    
git push --set-upstream origin {new_branch}     # Push the new branch, set local branch to track the new remote
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Удаление ветки
```bash
git push origin --delete {branch_name}      # Remove branch remotely
git branch -d {branch_name}                 # Remove branch locally
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Переименование тега
```bash
git tag {new_tag} {old_tag}                 # Copy tag with new name   
git tag -d {old_tag}                        # Remove tag locally
git push origin :refs/tags/{old_tag}        # Remove tag remotely
git push --tags                             # Push new tag remotely
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Клонирование ветки
```bash
git clone -b '{branch}' --single-branch {repo} {dir}
git clone -b 'v1.2.1' --single-branch --depth 1 https://github.com/finagin/Gulpfile.js.git v1.2.1
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Клонирование сабмодулей
В версии 1.9 и выше вы можете клонировать репозиторий и несколько сабмодулей паралельно:
```bash
git clone --recursive -j8 git://github.com/foo/bar.git
```
В версии 1.6.5 и выше:
```bash
git clone --recursive git://github.com/foo/bar.git
```
Для уже склонированного репозиторий или более ранних версий Git, нужно использовать:
```bash
git clone git://github.com/foo/bar.git
cd bar
git submodule update --init --recursive
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Удаление из индекса
Удаление файла
```bash
git rm --cached {file_name}
```
Удаление папки
```bash
git rm --cached -r {directory_name}
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Подделка даты коммита
```bash
git filter-branch --env-filter \
    'if [ $GIT_COMMIT = 119f9ecf58069b265ab22f1f97d2b648faf932e0 ]
     then
         export GIT_AUTHOR_DATE="Mon Feb 20 15:36:17 2017 +0300"
         export GIT_COMMITTER_DATE="Mon Feb 20 15:36:41 2017 +0300"
     fi'
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Перезапись "Initial commit"
```bash
git update-ref -d HEAD
```

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***
### Git Flow
[git-flow ↑](//danielkummer.github.io/git-flow-cheatsheet/index.ru_RU.html)

[Back to top](#%D1%D0%BF%D0%B8%D1%D0%BE%D0%BA-%D0%BF%D0%BE%D0%D0%B5%D0%B7%D0%D1%D1%85-%D0%BA%D0%BE%D0%D0%B0%D0%D0%B4)
***