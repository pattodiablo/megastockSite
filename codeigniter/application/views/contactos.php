<div class="body">
	<div style="background:#FFF; width:993px; margin:auto" >
    <div class="container"><img src="<?php echo(base_url());?>images/contactosBanner.png" width="993" height="371" border="0" /></div>
    
      <div class="news">
        <div style="height:20px;"></div>
        <div style=" width:auto; height:auto; margin-left:86px; margin-right:86px;">
          <div class="titleFontred">Contáctenos:</div>
          <div class="borderDotted"></div>
          <div class="textoNormal" >
              <p>AGROSTOCK ECUADOR<br />
                <a href="mailto:carolina@agro-stock.com" class="contacts">carolina@agro-stock.com</a><br />
                <a href="mailto:ventas@agro-stock.com" class="contacts">ventas@agro-stock.com</a><br />
                 <a href="mailto:ventas@agro-stock.com" class="contacts">gustavo@agro-stock.com</a><br />
              
              <br />
              Teléfonos:<br />
              (593) 2 6007898 • (593) 2 6041173<br />
              (593) 9 2526274 • (593) 9 2839949</p>
          </div>
          <div style="height:10px;"></div>
          <div class="borderDotted"></div>
          <div style="height:20px;"></div>
          <div style="float:left; width:420px;">
          	<div class="titleFontred">Suscríbase a nuestro newsletter quincenal y conozca más a más acerca de nuestros productos</div>
            <div class="textoNormal">
               <?php echo validation_errors(); ?>
               <?php echo form_open('contactos'); ?>
                 <table width="100%" border="0" cellspacing="8" cellpadding="0" style="margin:0px;">
                  <tr>
                    <td width="30%">Nombre:</td>
                    <td width="70%"><input name="nombre" type="text" id="textfield" size="22" /></td>
                  </tr>
                  <tr>
                    <td>E-mail:</td>
                    <td><input name="email" type="text" id="textfield2" size="22" /></td>
                  </tr>
                  <tr>
                    <td>Teléfono / Fax:</td>
                    <td><input name="telefono" type="text" id="textfield3" size="22" /></td>
                  </tr>
                </table>
                <div>Descripción / Comentarios:</div>
                <div style="height:10px;"></div>
                <div><textarea name="descripcion" cols="33" rows="10"></textarea>
               
                </div>
<div> <input name="enviar" type="submit" id="enviar" value="enviar" /></div>
                </form>
            </div>
          </div>
          <div style="float:left; margin-left:80px;;;">
          	<div class="titleFontred">Links Relacionados</div>
            <div style="height:20px;"></div>
            <div  class="textoNormal"> <a href="http://www.chrysalflowerfood.com/blog" target="_blank" class="contacts">www.chrysalflowerfood.com/blog</a><br />
            <a href="http://www.chrysalusa.com" target="_blank" class="contacts">www.chrysalusa.com</a></div>
          </div>
          <div style="clear:both"></div>
        </div>
        
        
      <div style="height:27px;"></div>
      <div style="height:20px;"></div>
      </div>
    </div>
</div>