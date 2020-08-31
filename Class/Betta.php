<?php 

    class Betta
    {
        private $betClase;
        private $betColor;
        private $betSexo;

        public function listarBettas()
        {
                $link = Conexion::conectar();

                $sql = "SELECT Clase, Color, Sexo
                        FROM betta";

                $stmt = $link->prepare($sql);
                $stmt->execute();

                $betta = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $betta;

        }

        public function ingresarBetta()
        {
                $betClase = $_POST['betClase'];
                $betColor = $_POST['betColor'];
                $betSexo = $_POST['betSexo'];

                $link = Conexion::conectar();

                $sql = "INSERT INTO `betta`(`Clase`, `Color`, `Sexo`) VALUES (:betClase, :betColor, :betSexo)";
                $stmt = $link->prepare($sql);

                $stmt->bindParam(':betClase',$betClase,PDO::PARAM_STR);
                $stmt->bindParam(':betColor',$betColor,PDO::PARAM_STR);
                $stmt->bindParam(':betSexo',$betSexo,PDO::PARAM_STR_CHAR);

                if($stmt->execute())
                {
                        $this->setBetClase($betClase);
                        $this->setBetColor($betColor);
                        $this->setBetSexo($betSexo);
                        return true;
                }
    
                return false;
        }


        public function getBetClase()
        {
                return $this->betClase;
        }

        public function setBetClase($betClase)
        {
                $this->betClase = $betClase;

                return $this;
        }

        public function getBetColor()
        {
                return $this->betColor;
        }

        public function setBetColor($betColor)
        {
                $this->betColor = $betColor;

                return $this;
        }

        public function getBetSexo()
        {
                return $this->betSexo;
        }

        public function setBetSexo($betSexo)
        {
                $this->betSexo = $betSexo;

                return $this;
        }
    }