<?php
class ProductoModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=db_tiendakupidos', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("
				SELECT
				  tbproducto.id,
				  tbproducto.nvchname,
				  tbproducto.nvchdescripcion,
				  tbproducto.nvchprecio,
				  tbproducto.nvchimg,
				  tbproducto.nvchfecha,
				  tbcategoria.nvchname AS NAMECATEGORIA
				FROM
				  tbproducto
				INNER JOIN
				  tbcategoria
				ON tbproducto.nvchcategoria = tbcategoria.id
				ORDER BY tbproducto.nvchfecha ASC
				");

			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Producto();

				$alm->__SET('id', $r->id);
				$alm->__SET('nvchname', $r->nvchname);
				$alm->__SET('nvchdescripcion', $r->nvchdescripcion);
				$alm->__SET('nvchprecio', $r->nvchprecio);
                $alm->__SET('nvchimg', $r->nvchimg);
				$alm->__SET('nvchfecha', $r->nvchfecha);
				$alm->__SET('NAMECATEGORIA', $r->NAMECATEGORIA);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbproducto WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Producto();

			$alm->__SET('id', $r->id);
			$alm->__SET('nvchname', $r->nvchname);
			$alm->__SET('nvchdescripcion', $r->nvchdescripcion);
			$alm->__SET('nvchprecio', $r->nvchprecio);
            $alm->__SET('nvchimg', $r->nvchimg);
			$alm->__SET('nvchfecha', $r->nvchfecha);
			$alm->__SET('nvchcategoria', $r->nvchcategoria);

			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM tbproducto WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Producto $data)
	{
		try 
		{
			$sql = "UPDATE tbproducto SET 
						nvchname          = ?, 
						nvchdescripcion        = ?,
						nvchprecio            = ?, 
                        nvchimg          = ?,
                        nvchfecha            = ?,
                        nvchcategoria            = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('nvchname'), 
					$data->__GET('nvchdescripcion'), 
					$data->__GET('nvchprecio'),
					$data->__GET('nvchimg'),
                    $data->__GET('nvchfecha'),
                    $data->__GET('nvchcategoria'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Producto $data)
	{
		try 
		{
		$sql = "INSERT INTO tbproducto (nvchname,nvchdescripcion,nvchprecio,nvchimg,nvchfecha,nvchcategoria) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('nvchname'), 
				$data->__GET('nvchdescripcion'), 
				$data->__GET('nvchprecio'),
				$data->__GET('nvchimg'),
                $data->__GET('nvchfecha'),
                $data->__GET('nvchcategoria'),
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}