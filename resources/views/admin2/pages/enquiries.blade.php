@extends('admin2.layouts.app')

@section('content')
  

<div class="container-fluid py-2">
    <!--------PHP-BLADE-VARIABLES------------------>
    @php
    $signup='signup';
    $register='register';
    $contactus='contactus';
    $career='career';
    @endphp
    <!------------------------------------->
    <style>
        #quriSearchlive:focus{
        
        outline: none;
        }
    </style>
<div class="row">
<div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 px-4 d-flex justify-content-between">
          <h6 class="text-white text-capitalize ps-3">{{ucfirst($type)}} Enquiries</h6>
          {{-- this is search bar --}}
          {{-- <div class="py-1 px-3" style="background-color: white; border-radius: 10px;">
            <i style="  border-radius: 10px;" class="fa-solid fa-magnifying-glass pe-2"></i>
            <input id="quriSearchlive" type="text" placeholder="Search.." style="border:none; ">
          </div> --}} 
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
              
                {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S.No</th> --}}
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    @switch($type)
                        @case($signup)
                            Agent Name
                            @break
                        @case($register)
                            Owner Name
                            @break
                        @case($contactus)
                            User Name
                            @break
                        @case($career)
                            Employee Name
                            @break
                    
                        @default
                            
                    @endswitch
                </th>
              
                @if ($type===$register)
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Company Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                @endif
                @if ($type===$contactus)
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Message</th>
                
                @endif
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mobile</th>
                {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th> --}}
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">City</th>
                @if ($type===$career)
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Area Of Interest</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Skill Level</th>
               
                @endif
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TimeStamp</th>
                {{-- <th class="text-secondary opacity-7"></th> --}}
              </tr>
            </thead>
            <tbody id="enquiryList">
                @foreach ($enquiries as $enquiry)
                <tr>
                    
                     

                    <td>
                     
                      <div class="d-flex px-2 py-1">
                        <div>
                            <span class="me-3">{{ $loop->iteration }}.</span>
                          {{-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$enquiry->name}}</h6>
                          @switch($type)
                              @case($register)
                              <h6 class="mb-0 text-sm">{{$enquiry->owner_name}}</h6>
                                  @break
                                @case($contactus)
                                  <h6 class="mb-0 text-sm">{{$enquiry->owner_name}}</h6>
                                    @break
                                @case($career)

                                    <h6 class="mb-0 text-sm">{{$enquiry->full_name}}</h6>
                                @break
                          
                              @default
                                  
                          @endswitch
                          <a href="mailto:{{$enquiry->email}}" target="_blank" class="text-xs text-secondary mb-0">{{$enquiry->email}}</a>
                        </div>
                      </div>
                    </td>
                    @switch($type)
                        @case($register)
                        <td>
                            <p   class="text-xs font-weight-bold mb-0">{{$enquiry->company_name}}</p>
                            <p class="text-xs text-secondary mb-0">{{ucfirst($enquiry->partership_type)}}</p>
                          </td>

                          <td>
                            <p   class="text-xs font-weight-bold mb-0">{{$enquiry->address}}</p>
                            {{-- <p class="text-xs text-secondary mb-0">{{ucfirst($enquiry->partership_type)}}</p> --}}
                          </td>

                          <td>
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B{{$enquiry->mobile }}&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp" style="color: green; font-size: 20px;"></i></a>
                            <a href="tel:{{$enquiry->mobile }}" target="_blank" class="text-xs font-weight-bold mb-0">{{$enquiry->mobile ?? 'Null'}}  </a>
                            <p class="text-xs text-secondary mb-0">Organization</p>
                          </td>

                          <td class="text-center">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->city ?? 'Null'}}</p>
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->state ?? 'Null'}}</p>
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->country ?? 'Null'}}</p>
                            
                          </td>
                          <td class="">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->created_at->format('j M Y / H:i')  ?? 'Null'}}</p> 
                          </td>
                            @break
                        
                        @case($contactus)
                        <td>
                            <textarea style="border: none; color:gray; text-transform: capitalize; font-size: 14px;" name="" id="" cols="15" rows="2" readonly>{{$enquiry->message}}</textarea>
                          </td>
                          
                         
                          <td>
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B{{$enquiry->phone }}&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp" style="color: green; font-size: 20px;"></i></a>
                            <a href="tel:{{$enquiry->phone }}" target="_blank" class="text-xs font-weight-bold mb-0">{{$enquiry->phone ?? 'Null'}}</a>
                            {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                          </td>

                          <td class="text-center">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->city ?? 'Null'}}</p>
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->state ?? 'Null'}}</p>
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->country ?? 'Null'}}</p>
                            
                          </td>
                          <td class="">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->created_at->format('j M Y / H:i')  ?? 'Null'}}</p> 
                          </td>
                        @break
                          
                        @case($signup)
                        <td>
                          <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B{{$enquiry->mobile }}&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp" style="color: green; font-size: 20px;"></i></a>
                            <a href="tel:{{$enquiry->mobile }}" target="_blank" class="text-xs font-weight-bold mb-0">{{$enquiry->mobile ?? 'Null'}}</a>
                            <p class="text-xs text-secondary mb-0">Organization</p>
                          </td>

                          <td class="text-center">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->city ?? 'Null'}}</p>
                            <p class="text-xs text-secondary mb-0">{{$enquiry->pincode}}</p>
                           
                            
                          </td>
                          <td class="">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->created_at->format('j M Y / H:i')  ?? 'Null'}}</p> 
                          </td>
                        @break

                        @case($career)
                        <td>
                          <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B{{$enquiry->phone }}&text={{urlencode('Hello, I want some details about package')}}&type=phone_number&app_absent=0"><i class="fa-brands fa-whatsapp" style="color: green; font-size: 20px;"></i></a>
                            <a href="tel:{{$enquiry->phone }}" target="_blank" class="text-xs font-weight-bold mb-0">{{$enquiry->phone ?? 'Null'}}</a>
                            {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                          </td>
                          <td class="text-center">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->city ?? 'Null'}}</p>
                            <p class="text-xs text-secondary mb-0">{{$enquiry->state ?? 'Null'}}</p>
                          </td>

                          <td>
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->area_of_interest ?? 'Null'}}</p>
                            {{-- <p class="text-xs text-secondary mb-0">{{$enquiry->state ?? 'Null'}}</p> --}}
                          </td>

                          <td>
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->skill_level ?? $enquiry->others}}</p>
                            {{-- <p class="text-xs text-secondary mb-0">{{$enquiry->others ?? ''}}</p> --}}
                          </td>
                          <td class="">
                            <p  class="text-xs font-weight-bold mb-0">{{$enquiry->created_at->format('j M Y / H:i')  ?? 'Null'}}</p> 
                          </td>
                            
                        @break
                    
                        @default
                            
                    @endswitch
                   
                    <td>
                      <!-- Form for DELETE request -->
                      <form action="{{ route('admin2.enquiry.destroy',['type'=>$type,'id'=> $enquiry->id]) }}" method="POST" class="d-inline">
                          @csrf
                          <!-- This tells Laravel the form should be treated as a DELETE request -->
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                  
                  
                    
                  </tr>
                @endforeach
              {{-- <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                  <p class="text-xs text-secondary mb-0">Organization</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                </td>
                <td class="align-middle">
                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr> --}}
             
            </tbody>
          

          </table>
        
        </div>
        {{-- {{ $enquiries->links() }} --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
          <form method="GET" action="" class="d-flex align-items-center gap-2">
            <label for="per_page" class="fw-semibold text-muted">Show:</label>
            <select name="per_page" id="per_page" class="form-select form-select-sm w-auto shadow-sm border-primary" onchange="this.form.submit()">
                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                <option value="75" {{ request('per_page') == 75 ? 'selected' : '' }}>75</option>
                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
            </select>
        </form>
      
          <!-- Laravel Pagination Links -->
          {{ $enquiries->appends(['per_page' => request('per_page')])->links() }}
      </div>
      


      </div>
    </div>
  </div>

</div>

{{-- <script>
   var $jq = jQuery.noConflict();
$jq(document).ready(function() {
    $jq('#quriSearchlive').on('input', function() {
        let query = $jq(this).val();
        let type = "{{ $type }}";

        console.log('Searching for:', query);
        // AJAX or other code here
    });
});

</script> --}}



 <!------------------------------------------>
 {{-- <script>
      var type = "{{ $type }}"; 
      console.log("hellot",type);
      console.log($('#quriSearchlive').length);  // Should log '1' if the element exists

    $(document).ready(function() {
        let debounceTimeout;
        $('#quriSearchlive').on('input', function() {
            let query = $(this).val();
            let type = "{{ $type }}";

            console.log('Searching for:', query); 
            // Debouncing to delay AJAX request until user stops typing
            clearTimeout(debounceTimeout);
            debounceTimeout = setTimeout(function() {
                $.ajax({
                    url: "/enquiries/search/" +type,
                    method: 'GET',
                    data: { query: query },
                    success: function(response) {
                        console.log('Response:', response); // Ch
                        // Update the table and pagination
                        $('#enquiryList').html(response);
                        // $('#pagination').html(response.pagination);
                    },
                    error: function(xhr, status, error) {
                         console.error('Error:', error); // Log if there's an error
                    }
                });
            }, 500); // Adjust delay time (500ms) to your preference
        });
    });
</script> --}}
<!------------------------------------------>





</div>





@endsection

