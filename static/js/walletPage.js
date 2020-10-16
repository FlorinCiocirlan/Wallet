// <div class="row">
//     <div class="col bg-light border rounded  d-flex justify-content-center">
//         Name
//     </div>
//     <div class="col bg-light border rounded d-flex justify-content-center">
//         Currency : Euro
//     </div>
// </div>
// <div class="row mt-4">
//     <div class="col d-flex justify-content-center">
//         <h4> 500 </h4>
//     </div>
// </div>
// <div class="row mt-4">
//     <div class="col d-flex justify-content-center">
//         <a href="../basic/transfer">
//             <button class="btn btn-sm btn-outline-info">Transfer Money</button>
//         </a>
//     </div>
//     <div class="col d-flex justify-content-center">
//         <a href="../basic/transaction">
//             <button class="btn btn-sm btn-outline-info">Transaction History</button>
//         </a>
//     </div>
// </div>

let wallets = document.querySelectorAll('#walletClickable');

function displayContent(response){
    console.log(response);
    let parent = document.getElementById('walletDetails');
    let content = '<div class="row">\n' +
        '    <div class="col text-center" id="walletText">\n' +
         response['name'] +' \n' +
        '    </div>\n' +
        '    <div class="col text-center" id="walletText">\n' +
        '        Currency : ' + response['currency'] + '\n' +
        '    </div>\n' +
        '</div>\n' +
        '<div class="row mt-4">\n' +
        '    <div class="col d-flex justify-content-center">\n' +
        '        <h4 class="text-primary">' + response['balance'] +'</h4>\n' +
        '    </div>\n' +
        '</div>\n' +
        '<div class="row mt-4">\n' +
        '    <div class="col d-flex justify-content-center">\n' +
        '        <a href="../basic/transfer">\n' +
        '            <button class="btn btn-sm" id="button">Transfer Money</button>\n' +
        '        </a>\n' +
        '    </div>\n' +
        '    <div class="col d-flex justify-content-center">\n' +
        '        <a href="../basic/addMoney">\n' +
        '            <button class="btn btn-sm" id="button">Add Money</button>\n' +
        '        </a>\n' +
        '    </div>\n' +
        '    <div class="col d-flex justify-content-center">\n' +
        '        <a href="../basic/transaction">\n' +
        '            <button class="btn btn-sm" id="button">Transaction History</button>\n' +
        '        </a>\n' +
        '    </div>\n' +
        '</div>'

    parent.innerHTML = content;
}

for(let wallet of wallets){
    wallet.addEventListener('click', function(){
        let walletId = wallet.childNodes['1'].firstChild.nextSibling.dataset['walletId'];
        let data = {'action' : 'getWalletDetails', 'walletID' : walletId};
         $.ajax({
             url : "../basic/dashboard.php",
             type : "POST",
             data : data,
             success : function(response){
                response = JSON.parse(response)
                 displayContent(response);
             }

         })
    })
}