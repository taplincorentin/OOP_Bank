<?php
    class BankAccount{

        //ATTRIBUTES
        private string $_accountType;
        private int $_balance;
        private string $_currency;
        private Holder $_holder;


        //METHODS

        //construct method
        function __construct(string $accountType, int $balance, string $currency, Holder $holder){
            $this->_accountType = $accountType;
            $this->_balance = $balance;
            $this->_currency = $currency;
            $this->_holder = $holder;
        }


        //get methods
	    public function get_accountType() {
		    return $this->_accountType;
	    }

        public function get_balance() {
            return $this->_balance;
        }

        public function get_currency(){
            return $this->_currency;
        }
        
        public function get_holder(): Holder {
            return $this->_holder;
        }
	

        //set methods
	    public function set_accountType($accountType) {
		    $this->_accountType = $accountType;
	    }

    	public function set_balance($balance){
		    $this->_balance = $balance;
	    }

        public function set_currency($currency) {
		    $this->_currency = $currency;
	    }
	
	    public function set_holder(Holder $holder) {
		    $this->_holder = $holder;
	    }

        //toString method
		public function __toString(){
    		return $this->get_accountType()." ".$this->get_balance()." ".$this->get_currency()." ".$this->get_holder();
		}
}
?>