
 <form class="form-horizontal" action="/action_page.php">
    
    <div class="form-group">

      <label class="control-label col-sm-2 " for="email">PO Number * : </label>
      <input class="col-sm-2" disabled   name="po_number">
<div class="col-sm-2 pull-right">Status : input</div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Real PO No. * :</label>
      <label>PO17-</label>
      <input  />
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Vendor * :</label>
      <input  placeholder="ID Distributor"/> <input  placeholder="Nama Distributor"/>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Purchase Date * :</label>
      <input type="date"/>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Delivery Branch * :</label>
      <input  value="JKT"/> <select>
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
      <label class="control-label col-sm-2 " for="pwd">Warehouse To * :</label>
      <input  placeholder="" value="WH-JKT-00001"/> <input  value="GUDANG GOOD"/>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Remarks * :</label>
      <textarea></textarea>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Created By * :</label>
      <input  disabled value="Admin Lc"/> 
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Head Of Finance * :</label>
      <input  disabled /> 
    </div>
    <div class="form-group">        
      <div class="col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>