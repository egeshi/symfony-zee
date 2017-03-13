<?php
/**
 * Created by Antony Repin
 * Date: 12.03.2017
 * Time: 21:00
 */

namespace App\Http\Controllers;

use Repositories\WordsRepository as Words;
use Repositories\HashesRepository as Hashes;

class IndexController extends Controller
{

    private $hashes;

    private $words;

    public function __construct(Hashes $hashes, Words $words)
    {
        $this->hashes = $hashes;
        $this->words = $words;
    }

    public function __invoke(){

        $data["words"] = $this->words->all();
        $data["hashes"] = hash_algos();

        array_map(function($hash) use (&$data) {
            if(strstr($hash, ",")){
                $key = array_search($hash, $data["hashes"]);
                unset($data["hashes"][$key]);
            }
        }, $data["hashes"]);
        
        return view('welcome', ['data' => $data]);
    }
}
