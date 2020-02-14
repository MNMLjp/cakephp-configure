<?php
/**
 * CakePHP 3 構成設定プラグイン
 *
 * @copyright Copyright (c) MNMLjp (https://mnml.jp)
 * @since     1.0.0
 * @author    daiki@mnml.jp
 */

namespace Configure\Core;

use Cake\Core\Configure;

/**
 * 構成設定トレイト
 *
 * @property \Cake\Core\Configure $Configure 構成設定インスタンス
 *
 * @method void loadConfigure() 構成設定の読み込み
 */

trait ConfigureTrait
{
	/**
	 * 構成設定
	 *
	 * @access public
	 * @var \Cake\Core\Configure
	 */
	public $Configure;

	/**
	 * 構成設定の読み込み
	 *
	 * @access public
	 * @return void
	 */
	public function loadConfigure()
	{
		$this->Configure = new Configure();
	}
}
