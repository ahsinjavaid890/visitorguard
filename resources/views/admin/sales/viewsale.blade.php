@extends('admin.layouts.main-layout')
@section('title','View Sale')
@section('content')
<?php
$today = strtotime(date('Y-m-d'));
$st_date = strtotime($data->start_date);
                                                
//checking policy status
if($today >= $st_date && $data->policy_status == 'paid'){
        $status = 'active';
        $class = 'success'; 
    } else 
    {
        if($data->policy_status == 'paid'){
        $status = 'paid';
        $class = 'info';    
    }else{
        $status = $data->policy_status;
    }   
}


if($data->product == '1'){
$policytype = 'SVI';
} else if($data->product == '2'){
$policytype = 'VTC';
} else if($data->product == '3'){
$policytype = 'SI';
} else if($data->product == '4'){
$policytype = 'IFC';
} else if($data->product == '5'){
$policytype = 'ST';
} else if($data->product == '6'){
$policytype = 'MT';
} else if($data->product == '7'){
$policytype = 'AI';
} else if($data->product == '8'){
$policytype = 'TII';
} else if($data->product == '9'){
$policytype = 'BC';
}

$policy_number_temp = 10000000 + $data->sales_id;
$policy_number = $policytype.$policy_number_temp;

if($data->policy_status == 'cancel'){
    $status = 'cancelled';
}
else if($data->policy_status == 'pending'){
    $status = 'pending';
}else if($data->policy_status == 'return'){
    $status = 'Early Return';
}   
//checking policy status ended
?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                             <h4><a type="button" class="btn btn-xs btn-primary form-control" href="{{ url('admin/sales/editsale')}}/{{$data->sales_id}}"><i class="fa fa-edit"></i> Edit Sale</a></h4>
                        </div>
                        <div class="col-md-2">
                             <h4><a type="button" data-toggle="modal" data-target="#addpolicyconfermation" class="btn btn-xs btn-primary form-control" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Policy Confermation</a></h4>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addpolicyconfermation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content" style=" border-left: 5px solid #2b3481; border-radius: 20px; ">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Policy Confermation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form enctype="multipart/form-data" method="POST" action="{{ url('admin/sales/policyconfermation') }}">
                        @csrf
                        <input type="hidden" value="{{ $data->sales_id }}" name="id">
                      <div class="modal-body">
                         
                            <div class="row">
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Select Policy Status</label>
                                     <select required class="form-control" name="policy_status">
                                         <option value="">Select Status</option>
                                         <option value="Pending">Pending</option>
                                         <option value="Approved">Approved</option>
                                     </select>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Policy Number</label>
                                     <input required type="text" class="form-control" name="policy_number">
                                  </div>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="form-group">
                                     <label>Upload Document</label>
                                     <input type="file" style="height:50px !important;" class="form-control" name="policydocument">
                                  </div>
                               </div>
                            </div>                            
                        
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                       </form>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <h4><strong>Policy Details</strong></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Company:</strong></td>
                                    <td>
                                        <img class="img-thumbnail" src="{{ url('public/images') }}/{{ $company->comp_logo }}" width="100">
                                    </td>
                                    <td bgcolor="#F6F6F6"><strong>Policy tittle:</strong></td>
                                    <td>{{ $data->policy_title }}</td>  
                                </tr>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Reffrence Number:</strong></td>
                                    <td>{{ $policy_number }}</td>
                                    <td bgcolor="#F6F6F6"><strong>Purchase Date:</strong></td>
                                    <td>{{ Cmf::date_format($data->purchase_date) }}</td>  
                                </tr>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Policy Status:</strong></td>
                                    <td style="color:red"><strong>{{ ucwords(strtolower($status)) }}</strong></td>
                                    <td bgcolor="#F6F6F6"><strong>Cancel Date:</strong></td>
                                    <td style="color:#c00;">{{ Cmf::date_format($data->end_date) }}</td>  
                                </tr>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Duration:</strong></td>
                                    <td><?php echo $data->duration;?> Days (<?php echo Cmf::date_format($data->start_date);?> - <?php echo Cmf::date_format($data->end_date); ?>)</td>
                                    <td bgcolor="#F6F6F6"><strong>Total Price:</strong></td>
                                    <td>$<?php echo number_format($data->price_total,2);?></td>  
                                </tr>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Coverage Amount:</strong></td>
                                    <td>$<?php echo number_format($data->benefit); ?></td>
                                    <td bgcolor="#F6F6F6"><strong>Deductible:</strong></td>
                                    <td>$<?php echo $data->deductible; ?> @ <?php echo $data->deductible_rate - 100; ?>%</td>  
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>
                    <h4><strong>Primary Insured Details:</strong> </h4>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Name:</strong></td>
                                    <td><?php echo $data->fname.' '.$data->lname;?></td>
                                    <td bgcolor="#F6F6F6"><strong>Age/DOB:</strong></td>
                                    <td><?php echo $data->age;?> years</td>  
                                </tr>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Email:</strong></td>
                                    <td><?php echo $data->email;?></td>
                                    <td bgcolor="#F6F6F6"><strong>Phone:</strong></td>
                                    <td><?php echo $data->phone;?></td>  
                                </tr>
                                <tr>
                                    <td bgcolor="#F6F6F6"><strong>Address:</strong></td>
                                    <td><?php echo $data->address.' '.$data->city.', '.$data->postcode.' '.$data->billing_province;?></td>
                                    <td bgcolor="#F6F6F6"><strong>Country:</strong></td>
                                    <td><?php echo $data->country;?></td>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--<h4><strong>Additional Insured Details:</strong></h4>-->
                    <div class="table-responsive" style="display:none;">
                        <table class="table">
                            <thead>
                                <tr bgcolor="#F9F9F9">
                                    <th><strong>SrNo</strong></th>
                                    <th><strong>Policy Number</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Age/DOB</strong></th>
                                    <th><strong>Relationship</strong></th>
                                    <th><strong>Start & End Dates</strong></th>
                                    <th><strong>Premium/Price</strong></th>
                                    <th><strong>Edit Details</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $sr = 0;
                            if($data->eligible == 'yes'){
                            $total_charges = $price;
                            }
                            else {
                            $total_charges = 0;
                            }
                            @endphp 
                            @foreach(DB::table('sales')->where('parent_sales_id' , $data->sales_id)->where('eligible' , 'yes')->orderby('sales_id' , 'desc')->get() as $r)
                            @php
                                $sr++;
                            @endphp
                                <tr>
                                    <td>{{ $sr }}</td>
                                    <td>{{ $r->policy_number }}</td>
                                    <td><?php echo $r->fname.' '.$r->lname;?></td>
                                    <td><?php echo $r->age;?>years (<?php echo $r->dob;?>)</td>
                                    <td><?php echo $r->relation;?></td>
                                    <td><?php echo $r->start_date;?> - <?php echo $r->end_date;?></td> 
                                    <td>$<?php echo number_format($r->price,2);?></td>
                                    <td><button type="button" class="btn-primary btn btn-xs" onClick="window.location='sales_edit_traveller.php?id=<?php echo $r->sales_id;?>'"><i class="fa fa-pencil"></i> Edit Details</button></td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <h4><strong>Payment Details:</strong></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr bgcolor="#F9F9F9">
                                    <th><strong>Date</strong></th>
                                    <th><strong>Description</strong></th>
                                    <th><strong>Payment Type</strong></th>
                                    <th><strong>Amount</strong></th>
                                    <th><strong>Reference Num</strong></th>
                                    <th><strong>Sub Total</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $balance = 0;
                            @endphp
                            @foreach(DB::table('sales_transactions')->where('sales_id' , $data->sales_id)->orderby('dated' , 'ASC')->get() as $r)
                                @php
                                $sales_id = $r->sales_id;
                                $datetime = $r->dated;
                                $desc = $r->description;
                                $payment_type = $r->payment_type;
                                $amount = $r->amount;

                                if($payment_type == 'payment'){
                                $balance += $amount;
                                }else if($payment_type == 'refund'){
                                $balance -= $amount;    
                                }
                                @endphp
                        
                                <tr>
                                    <td><?php echo $datetime;?></td>
                                    <td><?php echo $desc;?></td>
                                    <td><?php echo ucwords(strtolower($payment_type)); ?></td>
                                    <td><?php echo 10000000 + $sales_id;?></td>
                                    <td>$<?php echo number_format($amount,2);?></td>
                                    <td><strong>$<?php echo number_format($balance,2);?></strong></td>
                                </tr>
                            @endforeach   
                            </tbody>
                        </table>
                    </div>
                    <h4><strong>Policy Amendments:</strong></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr bgcolor="#F9F9F9">
                                    <th><strong>Date</strong></th>
                                    <th><strong>Amendment Type</strong></th>
                                    <th><strong>Old Value</strong></th>
                                    <th><strong>Requested By</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(DB::table('sales_amendments')->where('sales_id' , $data->sales_id)->get() as $r)
                                @php
                                    $user = DB::table('users')->where('id' , $r->requestedby)->first();
                                @endphp
                                <tr>
                                    <td><?php echo $r->dated;?></td>
                                    <td><?php echo $r->amend_type;?></td>
                                    <td><?php echo $r->old_value;?></td>
                                    <td><?php echo $user->fname.' '.$user->lname;?></td>
                               </tr>
                            @endforeach
                            </tbody>
                         </table>
                    </div>
                            
                    <h4><strong>Policy Notes:</strong></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr bgcolor="#F9F9F9">
                                    <th><strong>Date</strong></th>
                                    <th><strong>Comment</strong></th>
                                    <th><strong>Author</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(DB::table('comments')->where('sales_id' , $data->sales_id)->get() as $r)
                                <tr>
                                    <td><?php echo $r->dated; ?></td>
                                    <td><?php echo $r->comment; ?></td>
                                    <td><?php echo $r->user_name; ?></td>
                                    <td>
                                        <a href="{{ url('addnote') }}/{{ $data->sales_id }}/{{ $r->id }}" class="link"><i class="icon-pencil"></i> <font class="font-medium">Edit</font></a> <a href="{{ url('deletenote') }}/{{ $data->sales_id }}/{{ $r->id }}" onClick="return confirm('Are you sure you want to delete ?');" class="link"><i class="icon-trash"></i> <font class="font-medium">Delete</font></a></td>
                               </tr>
                            @endforeach
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection