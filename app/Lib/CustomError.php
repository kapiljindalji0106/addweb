<?php
namespace App\Lib;

use Illuminate\Support\Facades\Log;
/**
 * verious log in application
 */
class CustomError
{

  public static function logError($e)
  {
    Log::error($e->getMessage() . " " . $e->getFile() . $e->getLine());
  }

  public static function logErrorMessage(string $msg,$e)

  {
    Log::Error($msg.$e->getMessage(). " " . $e->getFile() . $e->getLine());
  }

  public static function info($msg)
  {
    Log::info($msg);
  }
  public static function alert($msg)
  {
    Log::alert($msg);
  }
  public static function debug($msg)
  {
    Log::debug($msg);
  }
  public static function error($msg)
  {
    Log::error($msg);
  }
}
