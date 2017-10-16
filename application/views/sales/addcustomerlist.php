
 <form class="form-horizontal" action="/action_page.php">
    
    <div class="form-group">

     
    
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Branch Name * :</label>
      <select>
  <option selected>Silahkan Pilih</option>
  <option selected value="Jakarta">Jakarta</option>
  <option value="Bandung">Bandung</option>
  <option value="Semarang">Semarang</option>
  <option value="Surabaya">Surabaya</option>
  <option value="Ambon">Ambon</option>
  <option value="Denpasar">Denpasar</option>
  <option value="Makassar">Makassar</option>
  <option value="Lampung">Lampung</option>
  <option value="Jambi">Jambi</option>
</select>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">ID Customer * :</label>
      <input  placeholder=""/> 
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Nama Customer * :</label>
      <input  placeholder=""/> 
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Nama Alias * :</label>
      <input  placeholder=""/> 
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Active * :</label>
      <select>
    <option selected value="yes">Yes</option>
  <option value="no">No</option>
  </select>
    </div>
    <div class="col-sm-10">
      <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Customer Information</a></li>
    <li><a data-toggle="pill" href="#menu1">Contact Person</a></li>
      </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

     <div id="customer-information"  style="display:;">
 <form class="form-horizontal" action="/action_page.php">                	
                    	<div class="form-group">
          <label class="control-label col-sm-2 " for="pwd">                 Alamat :</label>
                            
                                <textarea id="address" name="address" class="template-textarea"></textarea>
                            
                        </div></br>
                        <div class="form-group">
                        <label class="control-label col-sm-2 " for="pwd">Negara :</label>
                                <select id="country_code" name="country_code" class="template-selectfield" onchange="setOptionsState(this.value, 'http://mobitechdistributionsystem.com/system/', '/home/mobitech/public_html/system/')">
                                    <option value="">== Harap Dipilih ==</option>
                                                                        <option value="_Q_M">INDONESIA</option>
                                                                	</select>
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Provinsi  :</label>
                                <select id="provinsi" onchange="kota()"><option value="">== Harap Dipilih ==</option>
                                <option value="">Bali</option>
                                <option value="">Bandar Lampung</option>
                                <option value="">DKI Jakarta</option>
                                <option value="">Jambi</option>
                                <option value="">Jawa Barat</option>
                                <option value="">Jawa Tengah</option>
                                <option value="">Jawa Timur</option>
                                <option value="">Kepulauan Riau</option>
<option value="">Maluku</option>
<option value="">Riau</option>
<option value="">Sulawesi Selatan</option>
<option value="">Sumatera Utara</option>
<option value="">Sumatera Selatan</option>
<option value="">Yogyakarta</option>
                                                                	</select>
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Kota
                            :</label>
                            <select id="city_code" name="city_code" class="template-selectfield">
                                    <option value="">== Harap Dipilih ==</option>
                                    <option value="" id="kota">== Harap Dipilih ==</option>
                                                                	</select>
                            
                        </div>
                        <script type="text/javascript" >
                          function kota(){
                            $('#aio').find(":selected").text();
                          }
                        </script>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Telepon
                            :</label>
                            
                                <input type="text" id="customer_phone_area" name="customer_phone_area" class="template-textfield" style="width:15%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="5" value="">-
                                <input type="text" id="customer_phone" name="customer_phone" class="template-textfield" style="width:50%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="10" value="">
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">HP:</label>
                              <input type="text" id="customer_mobile_area" name="customer_mobile_area" class="template-textfield" style="width:15%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="5" value="">-
                                <input type="text" id="customer_mobile" name="customer_mobile" class="template-textfield" style="width:50%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="10" value="">
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Fax
                            :</label>
                            
                                <input type="text" id="customer_fax_area" name="customer_fax_area" class="template-textfield" style="width:15%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="5" value="">-
                                <input type="text" id="customer_fax" name="customer_fax" class="template-textfield" style="width:50%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="10" value="">
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Email
                            :</label>
                            <input type="text" id="customer_email" name="customer_email" class="template-textfield" onchange="checkFormatEmail(this, 'Wrong email format !')" value="">
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Tipe Customer *
                            :</label>
                            
                            	<select id="customer_type_code" name="customer_type_code" class="template-selectfield">
                                	<option value=""></option>
                                                                        <option value="_Q_M">B2B</option>
                                                                        <option value="_g_M">B2C</option>
                                                                        <option value="_w_M">WIC</option>
                                                                        <option value="_A_N">CRT / RM</option>
                                                                        <option value="_Q_N">CONSIGNMENT B2B</option>
                                                                        <option value="_g_N">CONSIGNMENT B2C</option>
                                                                    </select>
                            
                        </div>
                        </br>
                        <div class="form-group">
                          <label class="control-label col-sm-2 " for="pwd">  Tanggal Jatuh Tempo
                            :</label>
                            
                            	<select name="due_days" id="due_days" class="template-selectfield" style="">
                                	<option value=""></option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                    </select>
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Tanggal Penagihan
                            :</label><select>
                                	<option value=""></option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                    </select>
                            
                        </div>
                        </br>
                        <div class="form-group">
                            <label class="control-label col-sm-2 " for="pwd">Kredit Limit
                            :</label>
                            Rp. <input name="credit_limit" type="text" id="credit_limit" class="template-textfield" style="width:100px;" maxlength="13" value="0" onkeypress="return restrictCharacters(this, event, digitsOnly)">
                            
                        </div>
                  </br>      
                        <div class="form-group">
                          <label class="control-label col-sm-2 " for="pwd">  Total Kredit
                            :</label>
                            Rp. <input name="credit_value" type="text" id="credit_value" class="template-textfield" style="width:100px; background-color:#BDBDBD;" maxlength="13" value="" onkeypress="return restrictCharacters(this, event, digitsOnly)" readonly="readonly">
                  
                        </div>
                       </br> 
                        <div class="form-group">
                           <label class="control-label col-sm-2 " for="pwd"> Nama Bank:</label>
                            
                            	<select id="bank_code" name="bank_code" class="template-selectfield">
                                	<option value=""></option>
                                                                    </select>
                            
                        </div>
                        </br>
                        <div class="form-group" >
                            <label class="control-label col-sm-2 " for="pwd">Nama Rekening
                            :</label>
                            <input name="account_name" type="text" id="account_name" class="template-textfield"  maxlength="50" value="">
                            
                        </div>
                        </br>
                        <div class="form-group" >
                            <label class="control-label col-sm-2 " for="pwd">No Rekening
                            :</label>
                          
                            <input name="account_no" type="text" id="account_no" class="template-textfield" style="width:150px;" maxlength="30" value="" onkeypress="return restrictCharacters(this, event, digitsOnly)">
                          
                        </div>
  </form>
                    </div>
  
    </div>
    <div id="menu1" class="tab-pane fade">
     <div id="contact-person" class="tab-content-form" style="">
                	<div id="div_contact_person">
                                                <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Contact Person</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="contact_person_0" name="contact_person_0" class="template-textfield" style="width:98%;" maxlength="50">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Jabatan</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="job_position_0" name="job_position_0" class="template-textfield" style="width:98%;" maxlength="50">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Email</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="email_0" name="email_0" class="template-textfield" style="width:98%;" maxlength="50">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Telepon</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="phone_area_0" name="phone_area_0" class="template-textfield" style="width:15%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="5">-
                                <input type="text" id="phone_0" name="phone_0" class="template-textfield" style="width:50%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="10">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">HP</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="mobile_phone_area_0" name="mobile_phone_area_0" class="template-textfield" style="width:15%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="5">-
                                <input type="text" id="mobile_phone_0" name="mobile_phone_0" class="template-textfield" style="width:50%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="10">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Fax</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="fax_area_0" name="fax_area_0" class="template-textfield" style="width:15%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="5">-
                                <input type="text" id="fax_0" name="fax_0" class="template-textfield" style="width:50%;" onkeypress="return restrictCharacters(this, event, digitsOnly)" maxlength="10">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Pin BB</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <input type="text" id="pin_bb_0" name="pin_bb_0" class="template-textfield" style="width:98%;" maxlength="50">
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%; height:95px;">
                            <div class="form-content-row-left form-regis-left">Remark</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <textarea id="remark_0" name="remark_0" class="template-textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-content-row" style="width:70%;">
                            <div class="form-content-row-left form-regis-left">Active</div>
                            
                            <div class="form-content-row-right form-regis-right" style="width:63%;">
                                <select id="active_0" name="active_0" class="template-selectfield" style="width:auto; height:100%; border:1px solid #CCC; select_field_bgcolor">
                                	<option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                              <button type="submit" class="btn btn-default">Tambah Contact</button>    
                      </div>
    </div>
    
  </div>
  </div>
</br>
    <div class="form-group">        
      <div class="col-sm-10">
        <button type="submit" class="btn btn-default">Insert</button>  <button type="submit" class="btn btn-default">Back</button>
      </div>
    </div>
  </form>