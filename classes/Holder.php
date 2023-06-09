<?php
    class Holder {

        //ATTRIBUTES
        private string $_name;
        private string $_fName;
        private DateTime $_bDate;
        private string $_city;
        private array $_accounts;
        

        //METHODS
         //construct method
         function __construct(string $name, string $fName, string $bDate, string $city){
            $this->_name = $name;
            $this->_fName = $fName;
            $this->_bDate = new DateTime($bDate);
            $this->_city = $city;
            $this->_accounts = [];
        }
        

        //get methods
	    public function get_name(){
		    return $this->_name;
	    }
	    public function get_fName(){
		    return $this->_fName;
	    }

        public function get_bDate(): DateTime {
		    return $this->_bDate;
	    }

        public function get_city(){
		    return $this->_city;
	    }

        public function get_accounts(): array {
		    return $this->_accounts;
	    }
	

        //set methods
	    public function set_name($name) {
		    $this->_name = $name;
	    }

	
	    public function set_fName($fName) {
		    $this->_fName = $fName;
	    }

	    public function set_bDate(DateTime $bDate) {
		    $this->_bDate = $bDate;
	    }

	    public function set_city($city) {
		    $this->_city = $city;
	    }	
	
	    public function set_accounts(array $accounts) {
		    $this->_accounts = $accounts;
	    }

		//toString method
		public function __toString(){
    		return $this->get_name()." ".$this->get_fName()." ".$this->get_bDate()->format("d-m-Y")." ".$this->get_city();
		}

		//method to keep track of different accounts a holder can have
		function addAccount(BankAccount $account){
            $this->_accounts []= $account;
        }
		
		 //method to get the holder's name
		function age() {
            $now = new DateTime('now');
            return $this-> get_bDate() -> diff($now)->y;
                
        }

		//method to get a holder's accounts info
		function getAccountsInfos(){
			$result = "";
			$accounts = $this->get_accounts();
			foreach($accounts as $account){
				$result .= "Account Type : ".$account->get_accountType()." / Balance : ".$account->get_balance()." ".$account->get_currency().".<br>";
			}
			return $result;
		}
		
		function getHolderInfo(){
			return "Last name : ".$this->get_name()."/ First name : ".$this->get_fName()."<br> City : ".$this->get_city()."<br>Date of Birth : ".$this->get_bDate()->format("d-m-Y")." (".$this->age()." years old) <br>".$this->getAccountsInfos()."<br>";
		}
}
?>