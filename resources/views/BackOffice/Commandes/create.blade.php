@extends('Layouts.back')

@section('content')
@csrf
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>NOUVELLE COMMANDE</h4>

            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="" id="produit_id" class="form-control">
                                    <option value="">Produit ...</option>
                                    @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" id="qte"  placeholder="Quantite" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" id="pu"  placeholder="Prix de vente" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                               <button id="btn-ajout" class="btn btn-danger btn-xs">Ajouter</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container mt-4">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <th>DESIGNATIOM</th>
                            <th>PU</th>
                            <th>QUANTITE</th>
                            <th>MONTANT</th>
                            <th></th>
                        </thead>
                        <tbody id="tab">
                            <tr>
                                <td colspan="3" style="text-align: right; padding-right:10px;">TOTAL</td>
                                <td id="total">0</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <button class="btn btn-success btn-sm" id="btn-save">ENREGISTRER</button>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min-3.6.1.js') }}"></script>
    <script>
        var total = 0;
        $('#btn-ajout').click(function(){
           // alert('Hello tous!');
            var qte = $('#qte').val();
            var pu = $('#pu').val();
            var produit_id = $('#produit_id').val();
            var text = $('#produit_id option:selected').text();
            //console.log(`Quantite : ${qte} - prix unitaire: ${pu} - produit ${produit_id}`);
            var mt = qte * pu;
            total = total + mt;
            $('#total').text(total);
            $('.table').find('tbody').prepend(`<tr data-id=${produit_id} data-pu=${pu} data-qte=${qte} class="ligne"><td>${text}</td><td>${pu}</td><td>${qte}</td><td>${mt}</td><td><span class="btn-remove"><i class="btn btn-xs btn-warning">x</i></span></td></tr>`);
            $('.btn-remove').click(function(){
               // $('#total').text(total-mt);
               console.log($(this).parent().parent().remove());
            });
        });

        $('#btn-save').click(function(){
            var donnees = [];
            var token = $('input[name=_token]').val();
            //console.log("le csrf est :"+token);
           $('#tab').find('.ligne').each(function(){
            var elt = {};
            elt.id = $(this).data('id');
            elt.pu = $(this).data('pu');
            elt.qte = $(this).data('qte');
            /*    var cels = $(this).find('td');
              var elt = {
                'produit':cels.eq(0).text(),
                "pu":cels.eq(1).text(),
                "qte":cels.eq(2).text(),
              }; */
              donnees.push(elt);
           });
           console.log(donnees);
           $.ajax({
                url:'/admin/commande',
                type:'post',
                dataType:'json',
                data:{lignes: donnees,_token:token},
                success:function(data){
                    console.log(data);
                },
                error:function(){
                    alert('Something went wrong !!! Try again!');
                }
           });
        });

    </script>


    <style>
        .form-group{
            margin: 20px;
        }
    </style>
@endsection
