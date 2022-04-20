// choix du type de passeport
function ShowDetails(){
  var tp = document.getElementById('typepassport');
    if (tp.value=='ordinaire' || tp.value=='choix') {
      document.getElementById('ds').style.visibility="hidden";
    }
    else{
      document.getElementById('ds').style.visibility="visible";
    }

  }

  // choix du type du motif pour ancien pp
function ShowMotifsOldPp(){
  var motif = document.getElementById('motifs');
  if (motif.value=='renouvellement' || motif.value=='remplacement' || motif.value=='second') {
    document.getElementById('olppp').style.visibility="visible";
  }
  else if (motif.value!='renouvellement' || motif.value!='remplacement' || motif.value!='second') {
    document.getElementById('olppp').style.visibility="hidden";
  }

  }

   // choix du type du motif pour perte pp
function ShowMotifsPerte(){
  var motif = document.getElementById('motifs');
  if (motif.value=='perte') {
    document.getElementById('perte').style.visibility="visible";
  }
  else {
    document.getElementById('perte').style.visibility="hidden";
  }
}

  // Choix du motif
  function ShowMotifs(){
    var motif = document.getElementById('motifs');
      if (motif.value!='renouvellement') {
        document.getElementById('motifrenew').style.visibility="hidden";
        document.getElementById('numpassportrenew').style.visibility="hidden";
      }
      
      else{
        document.getElementById('motifrenew').style.visibility="visible";
        document.getElementById('numpassportrenew').style.visibility="visible";
      }
  
    }