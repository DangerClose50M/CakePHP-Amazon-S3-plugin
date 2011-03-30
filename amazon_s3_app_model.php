<?php
/**
 * Amazon S3 app model
 * 
 * @package AmazonS3
 * @author primeminister
 * @copyright 2011 Ministry of Web Developemt
 * @license MIT
 **/

Configure::load('AmazonS3.config');

class AmazonS3AppModel extends AppModel 
{
    var $useDbConfig = 'AmazonS3.AmazonS3';
    
    var _findMethods = array('info' => true);
    
    /**
     * undocumented function
     *
     * @return void
     * @access public
     **/
    publci function _findInfo($state, $query, $results = array()) 
    {
        if ($state == 'before') {
            $query['limit'] = 10;
            $query['order'] = 'created DESC';
            return $query;
        } elseif ($state == 'after') {
            return $results;
        }
    }
}