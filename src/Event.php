<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Ligatech;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Ligatech\Core\LigatechController;
use Ligatech\Exceptions\LigatechException;

/**
 * Description of Cliente
 *
 * @author weslley
 */
class Event extends LigatechController{
    
    public function create(array $data){        
        try{
            $response = $this->http->post('events', [
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
                        
        } catch (ClientException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (BadResponseException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (Exception $ex) {
            throw new LigatechException($ex);
        }
    }
    
    public function addSectors(array $data){        
        try{
            $response = $this->http->post('events/sectors', [
                "json" => $data,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
                        
        } catch (ClientException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (BadResponseException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (Exception $ex) {
            throw new LigatechException($ex);
        }
    }
    
    public function search(array $query = []){    
        $query = array_merge($query, [
            'clientId' => $this->getClientId(),
        ]);
        
        try{
            $response = $this->http->get('events', [
                'query' => $query,
            ]);

            $body = (string)$response->getBody();
                        
            return json_decode($body);
            
        } catch (ServerException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
                        
        } catch (ClientException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (BadResponseException $ex) {
            
            throw LigatechException::fromGuzzleException($ex);
            
        } catch (Exception $ex) {
            throw new LigatechException($ex);
        }
    }
    
}
