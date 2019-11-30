var aktiv_rad_kelp3 = false;
var using_rad = false;

function f1() {
  var inp_ustad = $('#txt_ustad_f1').val();
  var inp_kategori = $('#se_kategori_f1').children("option:selected").val();
  var link = 'kelp3.php?kode=f1&ustad_name='+inp_ustad+'&kategori='+inp_kategori;
  ajaxkelp3(link);
}

function f2() {
  var inp_angkot = $('#se_angkot_f2').children("option:selected").val();
  var link = 'kelp3.php?kode=f2&angkot='+inp_angkot;
  ajaxkelp3(link);
}

function f3() {
  var inp_event = $('#txt_event_f3').val();
  var inp_fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f3]:checked").length;i++){
    inp_fasilitas.push($("input[name=fasilitas_f3]:checked")[i].value);
  }
  var link = 'kelp3.php?kode=f3&event='+inp_event+'&fasilitas='+inp_fasilitas;
  ajaxkelp3(link);
}

function f4() {
  var inp_type =  $('#se_thotel_f4').children("option:selected").val();
  var inp_angkot =  $('#se_angkot_f4').children("option:selected").val();
  var inp_rad = $('#ra_radius_f4').val();
  inp_rad = inp_rad*100;
  $('#angka_f4').html(inp_rad);
  var link = 'kelp3.php?kode=f4&angkot='+inp_angkot+'&hotel_type='+inp_type+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f5() {
  var link = '';
  ajaxkelp3(link);
}

function f6() {
  var inp_garin = $('#txt_garin_f6').val();
  var inp_kategori = $('#se_kategori_f6').children("option:selected").val();
  var inp_angkot = $('#se_angkot_f6').children("option:selected").val();
  var link = 'kelp3.php?kode=f6&garin='+inp_garin+'&kategori='+inp_kategori+'&angkot='+inp_angkot;
  ajaxkelp3(link);
}

function f7() {
  var inp_garin = $('#txt_garin_f7').val();
  var inp_kondisi = $('#se_kondisi_f7').children("option:selected").val();
  var inp_fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f7]:checked").length;i++){
    inp_fasilitas.push($("input[name=fasilitas_f7]:checked")[i].value);
  }
  var link = 'kelp3.php?kode=f7&garin='+inp_garin+'&kondisi='+inp_kondisi+'&fasilitas='+inp_fasilitas;
  ajaxkelp3(link);
}

function f8() {
  var inp_angkot = $('#se_angkot_f8').children("option:selected").val();
  var inp_waktu = $('#se_waktu_f8').val();
  var inp_rad = $('#ra_radius_f8').val();
  inp_rad = inp_rad*100;
  $('#angka_f8').html(inp_rad);
  var link = 'kelp3.php?kode=f8&waktu='+inp_waktu+'&angkot='+inp_angkot+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f9() {
  var inp_max = $('#txt_max_f9').val();
  var inp_min = $('#txt_min_f9').val();
  if(inp_max <= inp_min){
    alert('Data Minimal Lebih Besar Dari Data Max');
    return ;
  }
  var inp_fasilitas_culinary = [];
  for(i=0;i<$("input[name=fculinary_f9]:checked").length;i++){
    inp_fasilitas_culinary.push($("input[name=fculinary_f9]:checked")[i].value);
  }
  var inp_rad = $('#ra_radius_f9').val();
  inp_rad = inp_rad*100;
  $('#angka_f9').html(inp_rad);
  var link = 'kelp3.php?kode=f9&fasilitas_culinary='+inp_fasilitas_culinary+'&max='+inp_max+'&min='+inp_min+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f10() {
    var inp_fasilitas = [];
    for(i=0;i<$("input[name=fasilitas_f10]:checked").length;i++){
      inp_fasilitas.push($("input[name=fasilitas_f10]:checked")[i].value);
    }
    var inp_waktu = $('#se_waktu_f10').val();
    var inp_type_tourism = $('#se_ttourism_f10').children("option:selected").val();
    var inp_rad = $('#ra_radius_f10').val();
    inp_rad = inp_rad*100;
    $('#angka_f10').html(inp_rad);
    var link = 'kelp3.php?kode=f10&fasilitas_tourism='+inp_fasilitas+'&type_tourism='+inp_type_tourism+'&waktu='+inp_waktu+'&rad='+inp_rad;
    ajaxkelp3(link);
}

function f11() {
  var inp_kecamatan = $('#se_kecamatan_f1_ra').children("option:selected").val();
  var inp_warna = $('#se_warna_f1_ra').children("option:selected").val();
  var link = 'kelp3.php?kode=f11&kecamatan='+inp_kecamatan+'&angkot_color='+inp_warna;
  ajaxkelp3(link);
}

function f12() {
  var inp_fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f12]:checked").length;i++){
    inp_fasilitas.push($("input[name=fasilitas_f12]:checked")[i].value);
  }

  var inp_event=[];
  for(i=0;i<$("input[name=tevent_f12]:checked").length;i++){
    inp_event.push($("input[name=tevent_f12]:checked")[i].value);
  }
  var link ='kelp3.php?kode=f12&type_event='+inp_event+'&fasilitas='+inp_fasilitas;
  ajaxkelp3(link);
}

function f13() {
  var inp_produk=[];
  for(i=0;i<$("input[name=produk_f13]:checked").length;i++){
    inp_produk.push($("input[name=produk_f13]:checked")[i].value);
  }
  var inp_status = $('#se_status_f13').children("option:selected").val();
  var inp_rad = $('#ra_radius_f13').val();
  inp_rad = inp_rad*100;
  $('#angka_f13').html(inp_rad);
  var link = 'kelp3.php?kode=f13&produk='+inp_produk+'&status='+inp_status+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f14() {
    var inp_max = $('#txt_max_f14').val();
    var inp_min = $('#txt_min_f14').val();
    if(inp_max <= inp_min){
      alert('Data Minimal Lebih Besar Dari Data Max');
      return ;
    }
    var inp_industry_type = $('#se_tindustry_f14').val();
    var inp_kecamatan = $('#se_kecamatan_f14').children("option:selected").val();
    var inp_rad = $('#ra_radius_f14').val();
    inp_rad = inp_rad*100;
    $('#angka_f14').html(inp_rad);
    var link = 'kelp3.php?kode=f14&industry_type='+inp_industry_type+'&max='+inp_max+'&min='+inp_min+'&rad='+inp_rad+'&kecamatan='+inp_kecamatan;
    ajaxkelp3(link);
}

function f15() {
    var inp_max = $('#txt_max_f15').val();
    var inp_min = $('#txt_min_f15').val();
    if(inp_max <= inp_min){
      alert('Data Minimal Lebih Besar Dari Data Max');
      return ;
    }
    var inp_souvenir_type = $('#se_tsouvenir_f15').val();
    var inp_angkot = $('#se_angkot_f15').children("option:selected").val();
    var inp_rad = $('#ra_radius_f15').val();
    inp_rad = inp_rad*100;
    $('#angka_f15').html(inp_rad);
    var link = 'kelp3.php?kode=f15&souvenir_type='+inp_souvenir_type+'&max='+inp_max+'&min='+inp_min+'&rad='+inp_rad+'&angkot='+inp_angkot;
    ajaxkelp3(link);
}

function f16() {
  var fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f16]:checked").length;i++){
    fasilitas.push($("input[name=fasilitas_f16]:checked")[i].value);
  }
  var inp_kategori = $('#se_kategori_f16').children("option:selected").val();
  var inp_kondisi = $('#se_kondisi_f16').children("option:selected").val();
  var link = 'kelp3.php?kode=f16&kategori='+inp_kategori+'&kondisi='+inp_kondisi+'&fasilitas='+fasilitas;
  ajaxkelp3(link);
}

function f17() {
  var inp_angkot = $('#se_angkot_f17').children("option:selected").val();
  var inp_kondisi = $('#se_kondisi_f17').children("option:selected").val();
  var inp_fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f17]:checked").length;i++){
    inp_fasilitas.push($("input[name=fasilitas_f17]:checked")[i].value);
  }

  var link = 'kelp3.php?kode=f17&angkot='+inp_angkot+'&kondisi='+inp_kondisi+'&fasilitas='+inp_fasilitas;
  ajaxkelp3(link);
}

function f18() {
  var inp_produk=[];
  for(i=0;i<$("input[name=produk_f18]:checked").length;i++){
    inp_produk.push($("input[name=produk_f18]:checked")[i].value);
  }
  var inp_status = $('#se_status_f18').children("option:selected").val();
  var inp_rad = $('#ra_radius_f18').val();
  inp_rad = inp_rad*100;
  $('#angka_f18').html(inp_rad);
  var link = 'kelp3.php?kode=f18&produk='+inp_produk+'&status='+inp_status+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f19() {
    var inp_culinary = $('#txt_culinary_f19').val();
    var inp_waktu = $('#se_waktu_f19').val();
    var inp_rad = $('#ra_radius_f19').val();
    inp_rad = inp_rad*100;
    $('#angka_f19').html(inp_rad);
    var link = 'kelp3.php?kode=f19&culinary='+inp_culinary+'&waktu='+inp_waktu+'&rad='+inp_rad;
    ajaxkelp3(link);
}

function f20() {
  var inp_type=[];
  for(i=0;i<$("input[name=type_f20]:checked").length;i++){
    inp_type.push($("input[name=type_f20]:checked")[i].value);
  }

  var inp_color=[];
  for(i=0;i<$("input[name=color_f20]:checked").length;i++){
    inp_color.push($("input[name=color_f20]:checked")[i].value);
  }

  var inp_rad = $('#ra_radius_f20').val();
  inp_rad = inp_rad*100;
  $('#angka_f20').html(inp_rad);

  var link = 'kelp3.php?kode=f20&color='+inp_color+'&type='+inp_type+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f21() {
  var inp_fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f21]:checked").length;i++){
    inp_fasilitas.push($("input[name=fasilitas_f21]:checked")[i].value);
  }
  var inp_type =  $('#se_thotel_f21').children("option:selected").val();
  var inp_rad = $('#ra_radius_f21').val();
  inp_rad = inp_rad*100;
  $('#angka_f21').html(inp_rad);
  var link = 'kelp3.php?kode=f21&hotel_type='+inp_type+'&fasilitas_hotel='+inp_fasilitas+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f22() {
  var inp_garin = $('#txt_garin_f22').val();
  var inp_event = $('#txt_event_f22').val();
  var inp_ustad = $('#txt_ustad_f22').val();
  var link = 'kelp3.php?kode=f22&garin='+inp_garin+'&event='+inp_event+'&ustad='+inp_ustad;
  ajaxkelp3(link);
}

function f23() {
  var inp_fasilitas=[];
  for(i=0;i<$("input[name=fasilitas_f23]:checked").length;i++){
    inp_fasilitas.push($("input[name=fasilitas_f23]:checked")[i].value);
  }
  var inp_angkot = $('#se_angkot_f23').children("option:selected").val();
  var inp_rad = $('#ra_radius_f23').val();
  inp_rad = inp_rad*100;
  $('#angka_f23').html(inp_rad);
  var link = 'kelp3.php?kode=f23&fasilitas_culinary='+inp_fasilitas+'&angkot='+inp_angkot+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f24() {
  var inp_max = $('#txt_max_f24').val();
  var inp_min = $('#txt_min_f24').val();
  if(inp_max <= inp_min){
    alert('Data Minimal Lebih Besar Dari Data Max');
    return ;
  }
  var inp_type = $('#se_thotel_f24').children("option:selected").val();
  var inp_rad = $('#ra_radius_f24').val();
  inp_rad = inp_rad*100;
  $('#angka_f24').html(inp_rad);
  var link = 'kelp3.php?kode=f24&type_hotel='+inp_type+'&max='+inp_max+'&min='+inp_min+'&rad='+inp_rad;
  ajaxkelp3(link);
}

function f25() {
  var inp_type = [];
  for(i=0;i<$("input[name=type_f25]:checked").length;i++){
    inp_type.push($("input[name=type_f25]:checked")[i].value);
  }
  var inp_waktu = $('#se_waktu_f25').val();
  var inp_angkot = $('#se_angkot_f25').children("option:selected").val();
  var inp_rad = $('#ra_radius_f25').val();
  inp_rad = inp_rad*100;
  $('#angka_f25').html(inp_rad);
  var link = 'kelp3.php?kode=f25&type='+inp_type+'&angkot='+inp_angkot+'&waktu='+inp_waktu+'&rad='+inp_rad;
  ajaxkelp3(link);
}


function radiuskelp3() {
    if (pos == 'null'){
        alert ('Click button current position or manual position first !');
    }
    else {
        aktiv_rad_kelp3 = true;
        hapusRadius();
        var circle = new google.maps.Circle({
          center: pos,
          radius: parseFloat(inputradiusangkot*100),
          map: map,
          strokeColor: "red",
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: "red",
          fillOpacity: 0.35
        });
        map.setZoom(14);
        map.setCenter(pos);
        circles.push(circle);
        cekRadiusStatus = 'on';
    }
}

function datakelp3(rows) {
    $('#hasilcari1').show();
    $('#hasilcari').empty();
    hapusInfo();
    clearroute2();
    clearroute();
    clearangkot();
    hapusRadius();
    hapusMarkerTerdekat();

    if(rows.length <= 0){
      alert('Mosque Not found');
    }
    else{
      for (var i in rows){
        var row     = rows[i];
        var id   = row.id;
        var nama   = row.name;
        var latitude  = row.latitude ;
        var longitude = row.longitude ;
        var cat = row.cat;
        var icon = 'assets/ico/marker_masjid.png';

        if(cat=='wp'){
          icon = 'assets/ico/marker_masjid.png';
        }
        else if(cat == 's'){
          icon = 'assets/ico/shopping.png';
        }
        else if(cat == 'si'){
          icon = 'assets/ico/industries.png';
        }
        else if(cat=='h'){
          icon = 'assets/ico/marker_hotel.png';
        }
        else if(cat=='t'){
          icon = 'assets/ico/marker_tw.png';
        }
        else if(cat=='c'){
          icon = 'assets/ico/food.png';
        }
        else if(cat=='r'){
          icon = 'assets/ico/restaurants.png';
        }
        centerBaru = new google.maps.LatLng(latitude, longitude);
        marker = new google.maps.Marker({
          position: centerBaru,
          icon: icon,
          map: map,
          animation: google.maps.Animation.DROP,
        });
        markersDua.push(marker);
        map.setCenter(centerBaru);

        map.setZoom(14);
        if(cat=='wp'){
          klikInfoWindow(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailmasjid(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='angkotmesjid(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
        else if(cat =='s'){
          klikInfoWindow_oleh(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailoleh(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='angkotsouvenir(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
        else if(cat =='si'){
          klikInfoWindow_industri(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailik(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='ngkotindustri(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
        else if(cat=='h'){
          klikInfoWindow_hotel(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailhotel(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='angkothotel(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
        else if(cat=='t'){
          klikInfoWindow_ow(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailow(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='angkotwisata(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
        else if(cat=='c'){
          klikInfoWindow_kuliner(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailculinary(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='angkotkuliner(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
        else if(cat=='r'){
          klikInfoWindow_res(id);
          $('#hasilcari').append("<tr><td>"+nama+"</td><td><a role='button' title='info' class='btn btn-default fa fa-info' onclick='detailrestaurant(\""+id+"\");info1();'></a></td><td><a role='button' class='btn btn-default fa fa-bus' title='jalur angkot' onclick='angkotrestaurant(\""+id+"\",\""+latitude+"\",\""+longitude+"\");info12();'></a></td></tr>");
        }
      }
    }
}

function ajaxkelp3(link) {
  console.log(link);
  $.ajax({ url: link, data: "", dataType: 'json', success: function (rows){
      datakelp3(rows);
      aktiv_rad_kelp3 = false;
  }})
}

function detailmesjidkelp3(id) {
  $('#info').empty();
  hapusInfo();
  clearroute2();
  clearroute();
  clearangkot();
  $.ajax({
   url: server+'detailmasjid1.php?cari='+id,
   data: "",
   dataType: 'json',
   success: function(rows){
      for (var i in rows){
          var row = rows[i];
          var id = row.id;
          var nama = row.name_mesjid;
          var alamat=row.address;
          var image = row.image;
          var latitude  = row.latitude;
          var longitude = row.longitude ;
          centerBaru = new google.maps.LatLng(row.latitude, row.longitude);
          marker = new google.maps.Marker({
            position: centerBaru,
            icon:'assets/ico/marker_masjid.png',
            map: map,
            animation: google.maps.Animation.DROP,
          });
          markersDua.push(marker);
          map.setCenter(centerBaru);
          map.setZoom(18);
          infowindow = new google.maps.InfoWindow({
            position: centerBaru,
            content: "<span style=color:black><center><b>Information</b><br><img src='"+fotosrc+image+"' alt='image in infowindow' width='150'></center><br><i class='fa fa-home'></i> "+nama+"<br><i class='fa fa-map-marker'></i> "+alamat+"<br><a role='button' title='tracking' class='btn btn-default fa fa-car' value='Route' onclick='callRoute(centerLokasi, centerBaru);rutetampil();resetangkot();'></a>&nbsp<a role='button' title='gallery' class='btn btn-default fa fa-picture-o' value='Gallery' onclick='galeri(\""+id+"\")'></a></span>",
            pixelOffset: new google.maps.Size(0, -33)
          });
          infoDua.push(infowindow);
          hapusInfo();
          infowindow.open(map);
      }
    }
  });
}
