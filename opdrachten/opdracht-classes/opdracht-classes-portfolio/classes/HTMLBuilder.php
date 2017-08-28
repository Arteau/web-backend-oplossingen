<?php 
    class HTMLBuilder{

        protected $headerName;
        protected $bodyName;
        protected $footerName;

        public function __construct($headerName, $bodyName, $footerName){
            $this->headerName = $headerName;
            $this->footerName = $footerName;
            $this->bodyName = $bodyName;
        }

        public function buildHeader(){
            
            $css = $this->buildCssLinks();
            include $this->headerName;
        }
        
        public function buildBody(){
            include $this->bodyName;
        }
        
        public function buildFooter(){
            $js = $this->buildJsLinks();
            include $this->footerName;
        }
        
        function convertToWebAdress($file,$extension){
             //is hier een betere oplossing voor ?
             //Chrome wou de locale files niet laden
            return 'http://oplossingen.web-backend.local/opdracht-classes/opdracht-classes-portfolio/'.str_replace("\\","/",substr($file,strpos($file,$extension),strlen($file)-1));
        }

        // public function includeCss(){
        //     $path = realpath("css");
        //     $rv = [];
        //     foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
        //     {
        //         if(substr($filename,-4)==".css")
        //             array_push($rv, $this->convertToWebAdress($filename));
        //     }
        //     return $rv;
        // }
        public function buildJsLinks(){
            $rv="";
            foreach($this->findFiles('js','js') as $file){
                $rv=$rv."<script src='".$this->convertToWebAdress($file,'js')."'></script>";
                
            }
            return $rv;
        }
        public function buildCssLinks(){
            $rv="";
            foreach($this->findFiles('css','css') as $file){
                $rv=$rv."<link rel='stylesheet' href='".$this->convertToWebAdress($file,'css')."'>";
            }
            return $rv;
        }
        public function findFiles($dir, $file){
            $path = realpath($dir);
            $rv = [];
             foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)) as $filename)
             {
                 if(substr($filename,-strlen($file))==$file)
                     array_push($rv, $filename);
             }
             return $rv;
        }
        

    }

?>