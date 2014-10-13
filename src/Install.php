<?php
	
namespace App\Calendar;

use ComposerScriptEvent;

class Install{
	
	//Before the instal command is executed;
	public static function preInstall(ComposerScriptEvent $event){}
	
	//After the Install Command is executed;
	public static function postInstall(ComposerScriptEvent $event){}
	
	//Before the package is installed;
	public static function prePackageInstall(ComposerScriptEvent $event){}
	
	//After the package is installed;
	public static function postPackageInstall(ComposerScriptEvent $event){}
	
	//Before the update command is called;
	public static function preUpdate(ComposerScriptEvent $event){}
	
	//After the update command is called;
	public static function postUpdate(ComposerScriptEvent $event){}
	
	//Before the package is updated
	public static function prePackageUpdate(ComposerScriptEvent $event){}
	
	//After the package is updated
	public static function postPackageUpdate(ComposerScriptEvent $event){}
		//Before the package is uninstalled
	public static function prePackageUnInstall(ComposerScriptEvent $event){}
		//After the package is uninstalled;
	public static function postPackageUnInstall(ComposerScriptEvent $event){}
		
}