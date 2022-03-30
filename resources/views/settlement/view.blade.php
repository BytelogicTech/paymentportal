<h4><b>Settlement Details</b></h4>
<div class="col-md-4">
    <div>
        <table >
            <tbody>
                <tr>
                    <td>Settlement Request ID :</td>
                    <td>{{$settlement->id}}</td>
                </tr>
                <tr>
                    <td>Merchant Name          :</td>
                    <td>{{$merchant_existing->merchant_name}}</td>
                </tr>
                <tr>
                    <td>Settlement Amount       :</td>
                    <td>{{$settlement->settlement_amount}}</td>
                </tr>
                <tr>
                    <td>Date                     :</td>
                    <td>{{$settlement->created_at}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<h4><b>Settlement Bank Details:</b></h4>
<div class="col-md-4">
    <div>
        <table >
            <tbody>
                <tr>
                    <td>Beneficiary Name            :</td>
                    <td>{{$bank_account_payout_existing->beneficiary_name}}</td>
                </tr>
                <tr>
                    <td>Beneficiary NickName:</td>
                    <td>{{$bank_account_payout_existing->beneficiary_nickname}}</td>

                </tr>
                <tr>
                    <td>Beneficiary Address:</td>
                    <td>{{$bank_account_payout_existing->beneficiary_address}}</td>
                </tr>
                <tr>
                    <td>Bank Name:</td>
                    <td>{{$bank_account_payout_existing->bank_name}}</td>
                </tr>
                <tr>
                    <td>Bank Branch:</td>
                    <td>{{$bank_account_payout_existing->bank_branch}}</td>
                </tr>
                <tr>
                    <td>Bank Address:</td>
                    <td>{{$bank_account_payout_existing->beneficiary_name}}</td>
                </tr>
                <tr>
                    <td>Bank Country:</td>
                    <td>{{$bank_account_payout_existing->bank_country}}</td>
                </tr>
                <tr>
                    <td>Bank Swift:</td>
                    <td>{{$bank_account_payout_existing->bank_swift}}</td>
                </tr>
                <tr>
                    <td>Acc No/IBAN:</td>
                    <td>{{$bank_account_payout_existing->account_number}}</td>
                </tr>
                <tr>
                    <td>Currency</td>
                    <td>{{$bank_account_payout_existing->currency}}</td>
                </tr>
                <tr>
                    <td>Remarks:</td>
                    <td>{{$bank_account_payout_existing->remarks}}</td>
                </tr>
                <tr>
                    <td>Purpose of Transfer:</td>
                    <td>{{$settlement->remarks}}</td>
                </tr>
                <tr>
                    <td>Intermediary Bank Name:</td>
                    <td>{{$bank_account_payout_existing->intermediary_bank_name}}</td>
                </tr>
                <tr>
                    <td>Intermediary Bank Address:</td>
                    <td>{{$bank_account_payout_existing->intermediary_bank_address}}</td>
                </tr>
                <tr>
                    <td>Intermediary Bank Swift Code :</td>
                    <td>{{$bank_account_payout_existing->bank_swift}}</td>
                </tr>
                <tr>
                    <td>Intermediary Remarks:</td>
                    <td>{{$bank_account_payout_existing->intermediary_bank_details_remarks}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>