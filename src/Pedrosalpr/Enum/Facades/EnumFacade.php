<?php
namespace Pedrosalpr\Enum\Facades;
/**
 * Class EnumFacade
 *
 * @package Pedrosalpr\Enum\Facades
 */
class EnumFacade extends \Illuminate\Support\Facades\Facade {
  /**
   * {@inheritDoc}
   */
  protected static function getFacadeAccessor()
  {
    return 'EnumMap';
  }
}