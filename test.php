<?php

abstract class BookAbstract
{
    protected $name;
    protected $author;

    public abstract function getAuthor();
    public abstract function getName();
}

abstract class FactoryBookAbstract
{
    public abstract function makePhpBook();
    public abstract function makeMysqlBook();
}

abstract class PhpAbstractBook extends BookAbstract
{
    protected $subject = 'php';
}

abstract class MysqlAbstractBook extends BookAbstract
{
    protected $subject = 'mysql';
}

class SamsFactory extends FactoryBookAbstract
{
    ma
}