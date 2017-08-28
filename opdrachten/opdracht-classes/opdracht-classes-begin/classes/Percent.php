<?php 

    class Percent {

        public $relative;
        public $hundred;
        public $nominal;

        public function __construct(float $new, float $unit)
        {   
            
            $this->relative = $new/$unit;
            
            $this->hundred = $this->relative * 100;
            if($this->relative > 1)
            {
                $this->nominal = 'positive';
            }
            else if($this->relative === 1 )
            {
                $this->nominal = 'status-quo';
            }
            else
            {
                $this->nominal = 'negative';    
            }
            

            
        }
    
        public function formatNumber($number)
        {
            return number_format($number,2);
        }
    }

?>