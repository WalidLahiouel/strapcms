<?php

$getPackages = dbquery('SELECT * FROM shells_packages WHERE id = "1"');

if (mysql_num_rows($getPackages) > 0)
{
    $package = mysql_fetch_assoc($getPackages);
}
?>
<body id="home" class=" ">

    <div id="container">
        <style>
#payment-details table td span {
    min-height: 30px!important;
}

</style>

<div id="payment-details-container">
    
    <div id="payment-details-header">
        <div class="rounded"><h1>Confirmer le paiement</h1></div>
    </div>


    <form id="proceedForm" method="post" >
        <input type="hidden" name="confirm" value="true"/>
        <input type="hidden" name="cp" value="false"/>
        
               
        <div id="payment-details">
            <h2>Détails du paiement</h2>
                        
            <table>
                <colgroup>
                    <col class="product"/>
                    <col class="price"/>
                    <col class="user"/>
                </colgroup>
                <thead>
                    <tr>
                        <th class="credit-amount">Produit</th>
                        <th class="price">Prix</th>
                        <th class="username">Nom Habbo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="credit-amount">
                            <span class="credit-amount"><?php echo $package['number']; ?></span>
                            <span class="credit-amount-x"></span>
                            <span class="credit-amount-coin"></span>
                                <span class="credit-amount-plus">+</span>
                                <span class="credit-amount">1</span>
                                <span class="seasonal-currency-amount-x"></span>
                        </td>
                        <td class="price">
                                <?php echo $package['price']; ?>
                        </td>
                        <td class="username">%habboName%</td>
                    </tr>
                </tbody>
            </table>


            <div id="email-address-container">
                <h3 >
                    <label for="confirmField"><span class="username">%habboName%</span>, confirme ton adresse e-mail</label>
                </h3>
                <div class="email-address-field">
                    <input type="text" id="emailAddress" class="text-field" size="34" name="confirmField" value="%user_email%" maxlength="48"/>
                </div>
            </div>

		    

            <div id="payment-methods" >
                <h2>Payer avec</h2>
                <ul class="clearfix payment-methods-2">
                    <li><a href="#" onclick="return submitMethodForm($(this).up('form'), '19064', 'bibit')" class="large-button logo-button"><span><img alt="Credit/Debit Card" src="https://www.habbo.com/deliver/images.habbo.com/c_images/cbs2_partner_logos/partner_logo_credit_card_005.png?h=6187207968649e80689770c84ae75f92"/></span><i></i></a></li>
                    <li><a href="#" onclick="return submitMethodForm($(this).up('form'), '19083', 'wp_paypal')" class="large-button logo-button"><span><img alt="Paypal" src="https://www.habbo.com/deliver/images.habbo.com/c_images/cbs2_partner_logos/partner_logo_paypal_001.png?h=3fc422a5606f68c0cebfafeb216b22cb"/></span><i></i></a></li>
                    <li><a href="https://bitpay.com/cart/add?itemId=XSVwbYlSxzqx_wWe26AZx5P9w8QmNlwSOK8GvHzkXAg=" onclick="return submitMethodForm($(this).up('form'), '19083', 'wp_paypal')" class="large-button logo-button"><span><b>Bitcoins</b></span><i></i></a></li>
                    <li><a href="#" onclick="return submitMethodForm($(this).up('form'), '19083', 'wp_paypal')" class="large-button logo-button"><span><b>Audiotel/SMS</b></span><i></i></a></li>
                </ul>
            </div>

            <div style="color: red; font-size: 8pt; margin: 10px;" class="method idx1">
                <div class="method-content">
                    <div>En cliquant sur un moyen de paiement vous acceptez <a href="http://localhost/tos" target="_blank" class="terms">nos Conditions d'utilisation</a></div>
                </div>
            </div>
            <div style="color:black; font-size: 8pt;">
                <a href="%www%/shells/get"> <span>Retourner sur %siteName%</span></a>
            </div>
        </div>
        
    </form>

    <div class="disclaimer">
        <h3><span>Important</span></h3>
        Demande toujours la permission à celui qui paye la facture avant d'acheter, si ce n'est pas le cas ton compte %siteName% sera exclus. Tout les moyens de paiements disponible sont ici, l'intégralité des fonds est versé au groupe StrapFamily afin de payer les serveurs hébergant l'hôtel.
    </div>

</div>


<p style="font-size: 8pt; margin-top: 30px;">
    <a style="color:#eff" href="%www%/shells/get">Revenir à la page d'achat</a>
</p>

<script type="text/javascript">Rounder.init();</script>
    </div>

</body>