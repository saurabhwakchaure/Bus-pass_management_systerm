<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PassController extends BaseController
{
    //private $detail=" ";
    //private $detail1=" ";
    
    public function pass()
    {
        return view('pass');
    }
    public function insertpass()
    {
        $data=[
            'firstname'=>$this->request->getVar('firstname'),
            'lastname'=>$this->request->getVar('lastname'),
            'gender'=>$this->request->getVar('gender'),
            'from'=>$this->request->getVar('from'),
            'to'=>$this->request->getVar('to'),
            'fromdate'=>$this->request->getVar('fromdate'),
            'todate'=>$this->request->getVar('todate'),
            'price'=>$this->request->getVar('price'),
            'identity'=>$this->request->getVar('identity'),
            'bonafidefile'=>$this->request->getVar('bonafidefile'),
            'bonafide'=>$this->request->getVar('bonafide'),
            'subject'=>$this->request->getVar('subject')
             ];

         //  dd($data);
           $model = new \App\Models\PassModel();
           $Model = model('PassModel');
           $model->insert($data);
             ?>
             <script>alert("Pass Book Successfully")</script>
             <?php
           
            return $this->response->redirect(site_url('transactionpass'));
    }
    public function transactionpass()
    {
        return view('transactionpass');
    }

    public function getPass()
    {
       $model = new \App\Models\PassModel();
       $Model = model('PassModel');
       $data['detail']=$model->findAll();
       return view('getPass',$data);
       return view('getPass');
    }
    public function insertransactionpass()
    {
        $data=[
            'firstname'=>$this->request->getVar('firstname'),
            'lastname'=>$this->request->getVar('lastname'),
            'transactionid'=>$this->request->getVar('transactionid')
             ];

          // dd($data);
           $model = new \App\Models\TransactionPassModel();
           $Model = model('TransactionPassModel');
           $model->insert($data);
             ?>
             <script>alert("Pass Book Successfully")</script>
             <?php
           
            return $this->response->redirect(site_url('myui'));
    }
    public function getTransactionPass()
    {
        $detail=" ";
       $model = new \App\Models\TransactionPassModel();
       $Model = model('TransactionPassModel');
       $data['detail']=$model->findAll();
       return view('getTransactionPass',$data);
       return view('getTransactionPass');
    }

    public function printPass($id)
    {
      $model = new \App\Models\PassModel();
      $Model = model('PassModel');
      $data['detail']=$model->find($id);
      //dd($data);
      ?>
      <diV class="container mt-5">
       <table border=1 class="table table-striped table-hover bg-white table-responsive-sm">
           <thead class="bg-dark">
               <tr>
                   <th>id</th>
                   <th>first_name</th>
                   <th>last_name</th>
                   <th>from</th>
                   <th>to</th>
                   <th>from date</th>
                   <th>to date</th>
                   <th>price</th>
                   <th>contact no </th>

                   
               </tr>
           </thead>
           <tbody>
              
             
            
     <?php        
      foreach($data as $demo)
      {
                     echo "<tr>";
                     echo "<td>".$demo['id']."</td>";
                     echo "<td>".$demo['firstname']."</td>";
                     echo "<td>".$demo['lastname']."</td>";
                     echo "<td>".$demo['from']."</td>";
                     echo "<td>".$demo['to']."</td>";
                     echo "<td>".$demo['fromdate']."</td>";
                     echo "<td>".$demo['todate']."</td>";
                     echo "<td>".$demo['price']."</td>";
                     echo "<td>".$demo['subject']."</td>";
                     
      }
      ?>
      <script>window.print()</script>
      
         </tbody>
         </table>
 
     </diV>
      
<?php

    }
    public function deletePass($id)
    {
        $model = new \App\Models\PassModel();
        $Model = model('PassModel');
         if($model->find($id))
         {
            $model->delete($id);
         } 
         return $this->response->redirect(site_url('getPass'));
    }

    public function deleteTransactionPass($id)
    {
        $model = new \App\Models\TransactionPassModel();
        $Model = model('TransactionPassModel');
         if($model->find($id))
         {
            $model->delete($id);
         } 
         return $this->response->redirect(site_url('getTransactionPass'));
    }
   
}
