<?php
if(isset($_POST["productseries"])){
    // Capture selected country
    $series = $_POST["productseries"];

    // Define country and city array
/*    $seriesArr = array(
                    "UTILITY ABS 1000 SERIES" => array("ALLEN® 1050UT "),
                    "STANDARD ABS 2000 SERIES" => array("ALLEN® 2025LG", "ALLEN® 2030LG ", "ALLEN® 2035LG"),
                    "TPO PRODUCTS 3000 SERIES" => array("ALLEN® T3050LG")
                );*/
                $seriesArr = array(
                    "UTILITY ABS 1000 SERIES" => array(
                                                    "-- please select --"=>array('oldname' =>'','description'=>''),
                                                    "ALLEN® 1050UT"=> array('oldname' =>'UTILITY ABS' ,'description'=>'Medium gloss, medium impact utility ABS  (black only)' )

                                                      ),
                    "STANDARD ABS 2000 SERIES" => array(
                                                        "-- please select --"=>array('oldname' =>'','description'=>''),
                                                        "ALLEN® 2025LG"=>array('oldname' =>'ULG/UTILITY' ,'description'=>'Low gloss, medium impact ABS'),
                                                        "ALLEN® 2030LG"=>array('oldname' =>'ULG/499' ,'description'=>'Low gloss, medium impact ABS'),
                                                        "ALLEN® 2035LG"=>array('oldname' =>'ULG/552' ,'description'=>'Low gloss, medium impact ABS'),
                                                        "ALLEN® 2040LG"=>array('oldname' =>'ULG/LXS' ,'description'=>'Low gloss, high impact ABS'),
                                                        "ALLEN® 2045LG"=>array('oldname' =>'ULG/3800' ,'description'=>'Low gloss, high impact ABS'),
                                                        "ALLEN® 2050MT"=>array('oldname' =>'556/UTILITY','description'=>'Matte gloss, medium impact ABS'),
                                                        "ALLEN® 2057MT"=>array('oldname' =>'556/552' ,'description'=>'Matte gloss, medium impact, ABS'),
                                                        "ALLEN® 2065MT"=>array('oldname' =>'556/LXS' ,'description'=>'Matte gloss, high impact, ABS'),
                                                        "ALLEN® 2070MT"=>array('oldname' =>'556/AX7' ,'description'=>'Matte gloss, high impact, ABS'),
                                                        "ALLEN® 2075MT"=>array('oldname' =>'556/3800' ,'description'=>'Matte gloss, high impact, ABS'),
                                                        "ALLEN® 2080MT"=>array('oldname' =>'556/75' ,'description'=>'Matte gloss, high impact, ABS'),
                                                        "ALLEN® 2085MG"=>array('oldname' =>'552/UTILITY' ,'description'=>'Medium gloss, medium impact, ABS'),
                                                        "ALLEN® 2090MG"=>array('oldname' =>'552/499' ,'description'=>'Medium gloss, medium impact, ABS'),
                                                        "ALLEN® 2091MG"=>array('oldname' =>'552/552' ,'description'=>'Medium gloss, medium impact, ABS' ),
                                                        "ALLEN® 2093MG"=>array('oldname' =>'552/3800' ,'description'=>'Medium gloss, high impact, ABS' ),
                                                        "ALLEN® 2095MG"=>array('oldname' =>'552/LXS' ,'description'=>'Medium gloss, high impact, ABS'),
                                                        "ALLEN® 2100HG"=>array('oldname' =>'552/UTILITY' ,'description'=>'Medium gloss, medium impact, ABS'),
                                                        "ALLEN® 2115HG"=>array('oldname' =>'AX7/499' ,'description'=>'Medium to high gloss, medium impact, ABS'),
                                                        "ALLEN® 2120HG"=>array('oldname' =>'AX7/AX7' ,'description'=>'Medium to high gloss, high impact, ABS'),
                                                        "ALLEN® 2125HG"=>array('oldname' =>'AX7/LXS' ,'description'=>'Medium to high gloss, high impact, ABS' ),
                                                        "ALLEN® 2130HG"=>array('oldname' =>'AX7/3800' ,'description'=>'Medium to high gloss, high impact, ABS'),
                                                        "ALLEN® 2135HG"=>array('oldname' =>'AX7/752' ,'description'=>'Medium to high gloss, high impact, ABS'),
                                                        "ALLEN® 2140HG"=>array('oldname' =>'3800/UTILITY','description'=>'High gloss, medium impact utility, ABS'),
                                                        "ALLEN® 2145HG"=>array('oldname' =>'3800/499' ,'description'=>'High gloss, medium impact, ABS'),
                                                        "ALLEN® 2150HG "=>array('oldname' =>'3800/552' ,'description'=>'High gloss, medium impact, ABS'),
                                                        "ALLEN® 2155HG"=>array('oldname' =>'3800/3800' ,'description'=>'High gloss, high impact, ABS'),
                                                        "ALLEN® 2157HG"=>array('oldname' =>'3800/752' ,'description'=>'High gloss, high impact, ABS'),
                                                        "ALLEN® 2160HG"=>array('oldname' =>'3800/LXS' ,'description'=>'High gloss, high impact, ABS'),
                                                        "ALLEN® 2165HG"=>array('oldname' =>'752/UTILITY' ,'description'=>'High gloss, medium impact utility, ABS'),
                                                        "ALLEN® 2170HG"=>array('oldname' =>'752/499' ,'description'=>'High gloss, medium impact, ABS'),
                                                        "ALLEN® 2175HG"=>array('oldname' =>'752/552' ,'description'=>'High gloss, medium impact, ABS'),
                                                        "ALLEN® 2180HG"=>array('oldname' =>'752/752' ,'description'=>'High gloss, high impact, ABS'),
                                                        "ALLEN® 2185HG"=>array('oldname' =>'752/LXS' ,'description'=>'High gloss, high impact, ABS')

                                                      ),
                    "TPO PRODUCTS 3000 SERIES" => array("ALLEN® T3050LG"),
                    "FDA SERIES ABS 4000 SERIES" => array(
                                                        "-- please select --"=>array('oldname' =>'','description'=>''),
                                                         "ALLEN® 4025"=>array('oldname' =>'556/3800' ,'description'=>'Matte gloss, high impact FDA, ABS'),
                                                         "ALLEN® 4050F"=>array('oldname' =>'552/552' ,'description'=>'Medium gloss, medium impact FDA, ABS'),
                                                         "ALLEN® 4055F"=>array('oldname' =>'552/3800' ,'description'=>'Medium gloss, high impact FDA, ABS'),
                                                         "ALLEN® 4100F"=>array('oldname' =>'AX7/AX7' ,'description'=>'Medium to high gloss, high impact FDA, ABS'),
                                                         "ALLEN® 4110F"=>array('oldname' =>'AX7/752' ,'description'=>'Medium to high gloss, high impact FDA, ABS'),
                                                         "ALLEN® 4125F"=>array('oldname' =>'AX7/3800' ,'description'=>'Medium to high gloss, high impact FDA, ABS'),
                                                         "ALLEN® 4150F"=>array('oldname' =>'3800/552' ,'description'=>'High gloss, medium impact FDA, ABS'),
                                                         "ALLEN® 4175F"=>array('oldname' =>'3800/3800' ,'description'=>'High gloss, high impact FDA, ABS'),
                                                         "ALLEN® 4200F"=>array('oldname' =>'752/552' ,'description'=>'High gloss, medium impact FDA, ABS'),
                                                         "ALLEN® 4225F"=>array('oldname' =>'752/752' ,'description'=>'High gloss, high impact FDA, ABS')
                                                        ),
                    "ASA/ABS WEATHERABLE PRODUCTS 5000 SERIES" => array(
                                                        "-- please select --"=>array('oldname' =>'','description'=>''),
                                                         "ALLEN® 5050WLG"=>array('oldname' =>'776 /LXS' ,'description'=>'Low gloss, high impact ASA-ABS'),
                                                         "ALLEN® 5055WLG"=>array('oldname' =>'776/752' ,'description'=>'Low gloss, high impact ASA-ABS'),
                                                         "ALLEN® 5060WLG"=>array('oldname' =>'776/3800' ,'description'=>'Low gloss, high impact ASA-ABS '),
                                                         "ALLEN® 5100WMG"=>array('oldname' =>'797/LXS' ,'description'=>'Medium gloss, high impact ASA-ABS'),
                                                         "ALLEN® 5125WMG"=>array('oldname' =>'797/3800' ,'description'=>'Medium gloss, high impact ASA-ABS'),
                                                         "ALLEN® 5155WHG"=>array('oldname' =>'825/3800' ,'description'=>'High gloss, high impact ASA-ABS'),
                                                         "ALLEN® 5160WHG"=>array('oldname' =>'825/LXS' ,'description'=>'High gloss, high impact ASA-ABS'),
                                                         "ALLEN® 5165WHG"=>array('oldname' =>'825/752' ,'description'=>'High gloss, high impact ASA-ABS')

                                                        ),
                    "ACRYLIC/ABS WEATHERABLE PRODUCTS 6000 SERIES" => array(
                                                        "-- please select --"=>array('oldname' =>'','description'=>''),
                                                         "ALLEN® 6000"=>array('oldname' =>'3 Layer Acrylic/LXS','description'=>'High gloss, medium impact, high DOI Acrylic-ABS'),
                                                         "ALLEN® 6010M"=>array('oldname' =>'3 Layer Acrylic/752' ,'description'=>'Low gloss acrylic, medium impact Acrylic-ABS'),
                                                         "ALLEN® 6100HG"=>array('oldname' =>'3 Layer Acrylic/752' ,'description'=>'High gloss, medium impact FDA Acrylic-ABS'),
                                                         "ALLEN® 6225HG"=>array('oldname' =>'Acrylic DR101/AX7' ,'description'=>'High gloss, medium impact Acrylic-ABS'),
                                                         "ALLEN® 6250HG"=>array('oldname' =>'Acrylic DR101/LXS' ,'description'=>'High gloss, medium impact Acrylic-ABS'),
                                                         "ALLEN® 6255HG"=>array('oldname' =>'Acrylic DR101/3800' ,'description'=>'High gloss, medium impact Acrylic-ABS'),
                                                         "ALLEN® 6260HG"=>array('oldname' =>'Acrylic DR101/752' ,'description'=>'High gloss, medium impact Acrylic-ABS'),
                                                         "ALLEN® 6275HG "=>array('oldname' =>'Solarkote A200/AX7' ,'description'=>'High gloss, medium impact Acrylic-ABS'),
                                                        "ALLEN® 6280HG"=>array('oldname' =>'Solarkote A200/3800' ,'description'=>'High gloss, medium impact Acrylic-ABS'),
                                                        "ALLEN® 6300HG"=>array('oldname' =>'Solarkote A200/LXS' ,'description'=>'High gloss, medium impact Solarkote-ABS'),
                                                        "ALLEN® 6350HG"=>array('oldname' =>'Solarkote A200/752' ,'description'=>'High gloss, medium impact Solarkote-ABS'),
                                                        "ALLEN® 6400LG"=>array('oldname' =>'Solarkote A200M/752' ,'description'=>'Low gloss, medium impact Solarkote-ABS')
                                                        ) ,
                    "PC/ABS PRODUCTS 8000 SERIES" => array(
                                                            "-- please select --"=>array('oldname' =>'','description'=>''),
                                                         "ALLEN® 8050TX"=>array('oldname' =>'2000EZ','description'=>'High gloss, high impact PC / ABS textured only'),
                                                         "ALLEN® 8150SM"=>array('oldname' =>'MC8100','description'=>'High gloss, high impact PC / ABS non FR smooth'),
                                                         "ALLEN® 8200BC"=>array('oldname' =>'M303FR','description'=>'High gloss, high impact FRPC / ABS  bio compatible'),
                                                         "ALLEN® 8250MD"=>array('oldname' =>'CM6210' ,'description'=>'High gloss, high impact FRPC / ABS G.E.  medical spec'),
                                                         "ALLEN® 8300FR"=>array('oldname' =>'FR3030' ,'description'=>'High gloss, high impact FRPC / ABS')
                                                        ),
                    "ALEXTRA AND PC PRODUCTS 9000 SERIES" => array(
                                                          "-- please select --"=>array('oldname' =>'','description'=>''),
                                                         "ALEXTRA®ET"=>array('oldname' =>'PC','description'=>'High gloss, very high impact, very high heat  UV PC'),
                                                         "ALLEN® 9000PC"=>array('oldname' =>'EXL 1330 PC','description'=>'High gloss, very high impact, extreme low temp UV PC')
                                                        )
                );

    // Display city dropdown based on country name
    if($series !== 'Select'){
        echo "<label for='prd-select'>Product <span class='required-error'>*</span></label>";
        echo "<select class='prd-select require' id='prd-select-populate' name='prd-select' >  ";
        foreach($seriesArr[$series] as $key => $value){ ?>
            <?php if(is_array($value)): ?>
            <option value="<?php echo $key; ?>" oldname ="<?php echo $value['oldname']; ?>" description = "<?php echo $value['description'] ?>">
                <?php echo $key; ?><?php if($value['oldname']){ echo ' &mdash; [Formerly '.$value['oldname'].']';}?>
            </option>
            <?php else: ?>
            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
            <?php endif; ?>
            <?php
        }
        echo "</select>";
    }
}
?>
<script type="text/javascript">
    $(document).ready(function(){
       $('body').on('change','#prd-select-populate',function(){
       var oldname =$(this).find('option:selected').attr('oldname');
       var description =$(this).find('option:selected').attr('description');
       //$(this).parents('.dynamic_product_binded').find('#populate_description').append("<b>" + oldname + "</b>");
      $(this).next().html("<strong>Description: </strong><span id='populate_description'>" + description + "</span>");
       });
    });
</script>
