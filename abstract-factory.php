<?php

abstract class AbstractBookFactory
{
    abstract function makePhpBook();
    abstract function makeSqlBook();
}

abstract class AbstractBook
{
    protected $title;

    protected $author;

    abstract function getAuthor();

    abstract function getTitle();
}

abstract class AbstractMysqlBook extends AbstractBook
{
    protected $subject = 'Mysql';
}

abstract class AbstractPhpBook extends AbstractBook
{
    protected $subject = 'PHP';
}

class SamsFactory extends AbstractBookFactory
{
    protected $context = 'sams';

    public function makePhpBook()
    {
        return new SamsPhpBook();
    }

    public function makeSqlBook()
    {
        return new SamsMysqlBook();
    }
}

class SamsMysqlBook extends AbstractMysqlBook
{
    function __construct()
    {
        $this->author = 'mysql author';
        $this->title = 'mysql1';
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}

class SamsPhpBook extends AbstractPhpBook
{
    function __construct()
    {
        $this->author = 'php author';
        $this->title = 'php1';
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}

$Sams = new SamsFactory();
$phpbook = $Sams->makePhpBook();
$mysqlbook = $Sams->makeSqlBook();

var_dump($mysqlbook);