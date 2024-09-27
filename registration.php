<?php
/**
 * GraphQL APIS
 *
 * Main regitration file
 *
 * This source file is subject to the Chandan Bhanopa.
 * This is used to register the module
 *
 * PHP version 8.2
 *
 * @category  Chandan
 * @package   Chandan
 * @author    Chandan Bhanopa <chandanbhanopa@gmail.com>
 * @copyright 2024 Chandn
 * @license   https://chandanbhanopa.wordpress.com chandan
 * @link      https://chandanbhanopa.wordpress.com
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Chandan_MyGraphQL',
    __DIR__
);
