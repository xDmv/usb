<?php

class ModelExtensionMarkups extends Model {

	public function getNManufacture () {
		$n_manufacture = array();

		$this->db->query("
			CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "editprice_manufacturer (
			ID Int(10) NOT NULL,
			Name_category varchar(255) NOT NULL,
			Procent decimal(15,2) NULL,
			Cheslo decimal(15,2) NULL,
			Date_insert varchar(19) NULL)
		");

		$query = $this->db->query("SELECT ID, Name_category, Procent, Cheslo FROM " . DB_PREFIX . "editprice_manufacturer ORDER BY id");
		foreach ($query->rows as $result) {
			$n_manufacture[] = $result;
		}

		return $n_manufacture;
	}

		public function getNCategory () {
			$n_category = array();

			$this->db->query("
				CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "editprice_category (
				ID Int(10) NOT NULL,
				Name_category varchar(255) NOT NULL,
				Procent decimal(15,2) NULL,
				Cheslo decimal(15,2) NULL,
				Date_insert varchar(19) NULL)
			");

			$query = $this->db->query("SELECT ID, Name_category, Procent, Cheslo FROM " . DB_PREFIX . "editprice_category ORDER BY id");
			foreach ($query->rows as $result) {
				$n_category[] = $result;
			}
			return $n_category;
		}

		public function getNameManufacture () {
			$name_manufacture = array();

			$query = $this->db->query("SELECT distinct manufacturer_id, name FROM " . DB_PREFIX . "manufacturer_description ORDER BY manufacturer_id");
			foreach ($query->rows as $result) {
				$name_manufacture[] = $result;
			}

			return $name_manufacture;
		}

		public function getNameCategory () {
			$name_category = array();

			$query = $this->db->query("SELECT distinct category_id, name FROM " . DB_PREFIX . "category_description ORDER BY category_id");
			foreach ($query->rows as $result) {
				$name_category[] = $result;
			}

			return $name_category;
		}

		public function Add_insert_m ($id, $procent, $cheslo) {
			$data = date("d-m-Y H:i:s");

			$this->db->query("INSERT INTO " . DB_PREFIX . "editprice_manufacturer (`ID`, `Name_category`, `Procent`, `Cheslo`, `Date_insert`) VALUES
			('".$id."', (Select distinct name From oc_manufacturer_description Where manufacturer_id = '".$id."'),'".$procent."','".$cheslo."','".$data."')");

			$this->db->query(" Update " . DB_PREFIX . "product set
			price = (price * (Select Procent From " . DB_PREFIX . "editprice_manufacturer where id = ".$id.") / 100 +
			(Select Cheslo From oc_editprice_manufacturer where id = ".$id.") + price)
			Where manufacturer_id = ".$id.";");

			return 'addM';
		}

		public function Add_insert_c ($id, $procent, $cheslo) {
			$data = date("d-m-Y H:i:s");

			$this->db->query("INSERT INTO oc_editprice_category (`ID`, `Name_category`, `Procent`, `Cheslo`, `Date_insert`) VALUES
			('".$id."', (Select name From " . DB_PREFIX . "category_description Where category_id = '".$id."'),'".$procent."','".$cheslo."','".$data."');");

			$this->db->query("Update " . DB_PREFIX . "product, " . DB_PREFIX . "product_to_category Set
			" . DB_PREFIX . "product.price = " . DB_PREFIX . "product.price * (Select Procent From " . DB_PREFIX . "editprice_category where id = ".$id.") / 100
			+ (Select Cheslo From oc_editprice_category where id = ".$id.") + " . DB_PREFIX . "product.price
			Where " . DB_PREFIX . "product.product_id = " . DB_PREFIX . "product_to_category.product_id and " . DB_PREFIX . "product_to_category.category_id = ".$id.";");

			return 'addC';
		}

		public function delManufacture ($id){
			$this->db->query("	UPDATE " . DB_PREFIX . "product
				SET price = (price - (Select Cheslo From oc_editprice_manufacturer where id = ".$id."))
				/(1+(Select Procent From oc_editprice_manufacturer where id = ".$id.")/100)
				Where manufacturer_id = ".$id.";");

			$this->db->query("DELETE FROM " . DB_PREFIX . "editprice_manufacturer WHERE ID = ".$id);
		return 'deletedM';
		}

		public function delCategory ($id){
			$this->db->query("
				UPDATE " . DB_PREFIX . "product, " . DB_PREFIX . "product_to_category
				SET oc_product.price =
				(" . DB_PREFIX . "product.price - (Select Cheslo From " . DB_PREFIX . "editprice_category where id = ".$id."))/(1+(Select Procent From " . DB_PREFIX . "editprice_category where id = ".$id.")/100)
				Where " . DB_PREFIX . "product.product_id = " . DB_PREFIX . "product_to_category.product_id and " . DB_PREFIX . "product_to_category.category_id = ".$id.";
			");
			$this->db->query("DELETE FROM " . DB_PREFIX . "editprice_category WHERE ID = ".$id);

		return 'deletedC';
		}
}

?>
