<link rel="stylesheet" href="{{ public_path('assets/css/print.css') }}">
<body>
    <div id="invoiceholder">
    <div id="invoice" class="effect21">

      <div id="invoice-top">
        <div class="logo"><img src="{{ !empty($setting['company_logo']) ? public_path('media/img/company/' . $setting['company_logo']) : public_path('image/logo.png')  }}"
         alt="Logo" align="center" border="0"></div>
        <div class="title">
          <h1>{{ Str::ucfirst('customers List') }}</h1>
          <p> Date: <span id="invoice_date">{{ date('d m Y'), strtotime(now()) }}</span>
          </p>
        </div><!--End Title-->
      </div><!--End InvoiceTop-->



      <div id="invoice-mid">
          <div class="clearfix">
              <div class="col-left">
                  <div class="clientinfo">
                      <h2 id="supplier">{{ $setting->company_name }}</h2>
                       <p>
                        <b>Address: </b> <span id="address">{{  $setting->company_address_1 }}</span><br>
                       <b>City: </b> <span id="city">{{ $setting->company_city }}</span> &nbsp;&nbsp;
                        <span id="country">{{ $setting->company_country }}</span> - <span id="zip">{{ $setting->company_postcode }}</span><br>
                        <b>Tel: </b><span id="tax_num">{{ $setting->company_phone }}</span><br>
                        <b>Email: </b><span id="tax_num">{{ $setting->company_email }}</span>
                    </p>
                  </div>
              </div>
          </div>
      </div><!--End Invoice Mid-->

      <div id="invoice-bot">

        <div id="table">
          <table class="table-main">
            <thead>
                <tr class="tabletitle">
                  <th>#</th>
                  <th >NAME</th>
                  <th>EMAIL</th>
                  <th >PHONE</th>
                  <th >COUNTRY</th>
                </tr>
            </thead>
            @foreach ($customers as $key => $customer)
            <tr class="list-item" style="margin-bottom: 10px">
              <td data-label="Type" class="tableitem">{{ $key+1 }}</td>
              <td data-label="Description" class="tableitem">{{ $customer->name }}</td>
              <td data-label="Quantity" class="tableitem">{{ $customer->email }}</td>
              <td data-label="Unit Price" class="tableitem">{{ $customer->phone }}</td>
              <td data-label="Discount" class="tableitem">{{ $customer->country }}</td>
            </tr>
            @endforeach
          </table>
        </div><!--End Table-->
        <div class="cta-group">
      </div>

      </div><!--End InvoiceBot-->
      <footer>
        <div id="legalcopy" class="clearfix">
          <p class="col-right">Our mailing address is:
              <span class="email"><a href="www.jambasangsang.com">{{ $setting->company_email }}</a></span>
          </p>
        </div>
      </footer>
    </div><!--End Invoice-->
  </div><!-- End Invoice Holder-->
  </body>
