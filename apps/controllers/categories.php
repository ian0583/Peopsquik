<?php

if (!$this->acl->isSignedIn())
{
	$this->forward('index');
}

$categoriesObj = new Categories();

$this->assign('categories', $categoriesObj->getAll());