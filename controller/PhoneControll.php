<?php
    class PhoneControl {
        public $phoneModel;

        public function __construct()
        {
            $this->phoneModel = new Phone();
        }

        public function getList() {
            $phone = $this->phoneModel->getAllphones();

            require_once './view/list.php';
        }

        public function getDetail(){
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            if(isset($id) && $id > 0){
                $phone = $this->phoneModel->getbyId($id);
                
                require_once './view/detail.php';
            }
        }

        public function create(){
            // Kiem tra da submit hay chua
            if(isset($_POST['them'])){
                // lay du lieu luu vao database
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $brand = $_POST['brand'];
                $color = $_POST['color'];
               
             
                //goi sang model, luu vao database
                $this->phoneModel->save($id,$name,$image,$brand,$color);
    
                // dua ve trang danh sac
                header('location: index.php?act=list');
               
            }
           
            require_once './view/create.php'; // form nhap lieu
            
        }

        public function edit() {
            $id = isset($_GET['id']) 
            ? $_GET['id'] 
            : null;
        $phone = $this->phoneModel->getById($id);
        require_once './view/edit.php';
            if(isset($_POST['sua'])){
                $name = $_POST['name'];
                $image = $_POST['image'];
                $brand = $_POST['brand'];
                $color = $_POST['color'];

                // thuc hien truy van
                $this->phoneModel->update($id,$name,$image,$brand,$color);

                // dua ve trang danh sach
                header('location: index.php?act=list');
            }
            
           
        }

        public function delete()
        {
            // lay id ban ghi can xoa
            $id = isset($_GET['id']) 
            ? $_GET['id'] 
            : null;
        if(isset($id)&& $id > 0){
            $this->phoneModel->delete($id);
            header('location: index.php?act=list');
        } 
        }
    }
?>