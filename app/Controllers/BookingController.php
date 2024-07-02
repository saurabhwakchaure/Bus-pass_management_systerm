<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BookingController extends BaseController
{
    private $detail=" ";
    private $detail1=" ";
    public function backup()
    {
        return view('backup');
    }
    //for reservation 
    public function insertreserve()
    {
        $data=[
            'first_name'=>$this->request->getVar('first_name'),
            'last_name'=>$this->request->getVar('last_name'),
            'address'=>$this->request->getVar('address'),
            'gender'=>$this->request->getVar('gender'),
            'from'=>$this->request->getVar('from'),
            'to'=>$this->request->getVar('to'),
            'contact_no'=>$this->request->getVar('contact_no'),
            'date'=>$this->request->getVar('date'),
            'price'=>$this->request->getVar('price')
             ];

           //dd($data);
           $model = new \App\Models\ReserveModel();
           $Model = model('ReserveModel');
            // $model=new ReserveModel();
             $model->insert($data);

             echo '<script>alert("vegetable data insert successfully")</script>';  
             return $this->response->redirect(site_url('transactionbooking'));
    }
    public function demo()
     {
        $model = new \App\Models\ReserveModel();
        $Model = model('ReserveModel');
        $data['detail']=$model->findAll();
        return view('demo',$data);
        return view('demo');
     }

     public function fare()
     {
        $model = new \App\Models\FareModel();
        $Model = model('FareModel');
        $data['detail']=$model->findAll();
        return view('fare',$data);
        return view('fare');
     }
     public function getBooking()
     {
        $model = new \App\Models\ReserveModel();
        $Model = model('ReserveModel');
        $data['detail']=$model->findAll();
        return view('getbooking',$data);
        return view('getbooking');
     }

     public function deleteBooking($id)
     {
      $model = new \App\Models\ReserveModel();
      $Model = model('ReserveModel');
       if($model->find($id))
       {
          $model->delete($id);
       } 
       return $this->response->redirect(site_url('getBooking'));
     }

     public function booking()
     {
      return view('booking');
     }

     public function printBooking($id)
     {
       $model = new \App\Models\ReserveModel();
       $Model = model('ReserveModel');
       $data['detail']=$model->find($id);
       ?>
       <diV class="container mt-5">
        <table border=1 class="table table-striped table-hover bg-white table-responsive-sm">
            <thead class="bg-dark">
                <tr>
                    <th>id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>address</th>
                    <th>gender</th>
                    <th>from</th>
                    <th>to</th>
                    <th>contact_no</th>
                    <th>no_of_seats</th>
                    <th>price</th>

                    
                </tr>
            </thead>
            <tbody>
               
              
             
      <?php        
       foreach($data as $demo)
       {
                      echo "<tr>";
                      echo "<td>".$demo['id']."</td>";
                      echo "<td>".$demo['first_name']."</td>";
                      echo "<td>".$demo['last_name']."</td>";
                      echo "<td>".$demo['address']."</td>";
                      echo "<td>".$demo['gender']."</td>";
                      echo "<td>".$demo['from']."</td>";
                      echo "<td>".$demo['to']."</td>";
                      echo "<td>".$demo['contact_no']."</td>";
                      echo "<td>".$demo['date']."</td>";
                      echo "<td>".$demo['price']."</td>";
                      
       }
       ?>
       <script>window.print()</script>
       
          </tbody>
          </table>
  
      </diV>
       
<?php

     }
     public function transactionbooking()
     {
        return view('transactionbooking');
     }
    public function insertransactionTicket()
    {
        $data=[
            'firstname'=>$this->request->getVar('firstname'),
            'lastname'=>$this->request->getVar('lastname'),
            'transactionid'=>$this->request->getVar('transactionid')
             ];

          // dd($data);
           $model = new \App\Models\TransactionTicketModel();
           $Model = model('TransactionTicketModel');
           $model->insert($data);
             ?>
             <script>alert("Ticket Book Successfully")</script>
             <?php
           
            return $this->response->redirect(site_url('myui'));
    }

   

    public function getTransactionTicket()
    {
       $detail=" ";
       $model = new \App\Models\TransactionTicketModel();
       $Model = model('TransactionTicketModel');
       $data['detail']=$model->findAll();
       return view('getTransactionTicket',$data);
       return view('getTransactionTicket');
    }

    public function deleteTransactionBooking($id)
     {
      $model = new \App\Models\TransactionTicketModel();
      $Model = model('TransactionTicketModel');
       if($model->find($id))
       {
          $model->delete($id);
       } 
       return $this->response->redirect(site_url('getTransactionTicket'));
     }
   
}

