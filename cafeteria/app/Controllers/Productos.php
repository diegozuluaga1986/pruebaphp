<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
class Productos extends Controller{

    public function index(){
        $producto= new Producto();
        $datos['productos']= $producto->orderBy('id','ASC')->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
       
        return view('productos/listar',$datos);
    }
    public function crear(){
       // $datos['cabecera']= view('template/cabecera');
        //$datos['pie']= view('template/piepagina'); 

        return view('productos/crear');//,$datos);
        

        
    }
    public function guardar(){
       
        $producto= new Producto();

        
        $validacion = $this->validate([
            'Nombre_Producto'=>'required',
            'Referencia'=>'required',
            'Precio'=>'required',
            'Peso'=>'required',
            'Categoria'=>'required',
            'Stock'=>'required',
            'Fecha'=>'required',
                

        ]);
     
        if (!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Por favor diligencie todos los campos');

            return redirect()->back()->withInput();
        }
        

    
        if($Nombre_Producto=$this->request->getVar('Nombre_Producto')){
        $datos=[
            'Nombre_Producto'=>$this->request->getVar('Nombre_Producto'),
        
       'Referencia'=>$this->request->getVar('Referencia'),
       'Precio'=>$this->request->getVar('Precio'),
       'Peso'=>$this->request->getVar('Peso'),
       'Categoria'=>$this->request->getVar('Categoria'),
       'Stock'=>$this->request->getVar('Stock'),
       'Fecha'=>$this->request->getVar('Fecha')

       
       
     
        ];
        
       $producto->insert($datos);
    }   
        echo "ingresado";
        return  $this->response->redirect(site_url('/listar')) ;
        }
      
        public function borrar($ID=null){
            $producto= new Producto();
            $datosProducto=$producto->where('ID',$ID)->first();
    
          
    
            $producto->where('ID',$ID)->delete($ID);
            return  $this->response->redirect(site_url('/listar')) ;
    
     
        }
    


        public function editar($ID=null){
            print_r($ID);
            $producto= new Producto();
            $datos['producto'] =$producto->where('ID',$ID)->first();
            
            $datos['cabecera']= view('template/cabecera');
            $datos['pie']= view('template/piepagina');
    
            
            return  view ('productos/editar', $datos) ;
            
          
        }

        public function actualizar(){
            $producto= new Producto();
            $datos=[
                'Nombre_Producto'=>$this->request->getVar('Nombre_Producto'),
        
                'Referencia'=>$this->request->getVar('Referencia'),
                'Precio'=>$this->request->getVar('Precio'),
                'Peso'=>$this->request->getVar('Peso'),
                'Categoria'=>$this->request->getVar('Categoria'),
                'Stock'=>$this->request->getVar('Stock'),
                'Fecha'=>$this->request->getVar('Fecha')
                                      
              
                 ];
            $ID= $this->request->getVar('ID');
    
    
            $validacion = $this->validate([
                'Nombre_Producto'=>'required',
                'Referencia'=>'required',
                'Precio'=>'required',
                'Peso'=>'required',
                'Categoria'=>'required',
                'Stock'=>'required',
                'Fecha'=>'required',
                    
    
            ]);
         
            if (!$validacion){
                $session=session();
                $session->setFlashdata('mensaje','Por favor diligencie todos los campos');
    
                return redirect()->back()->withInput();
               
            
                //return  $this->response->redirect(site_url('/listar')) ;
    
            }

            if($Nombre_Producto=$this->request->getVar('Nombre_Producto')){
                $datosProducto=$producto->where('ID',$ID)->first();
            $producto->update($ID,$datos);
            return  $this->response->redirect(site_url('/listar'));
            }

        }

        public function ventas(){
            
            $producto= new Producto();
            $datos['productos']= $producto->orderBy('ID','ASC')->findAll();
            $datos['cabecera']= view('template/cabecera');
            $datos['pie']= view('template/piepagina');
           
            return view('productos/ventas',$datos);

        }
}   