<?php

class GetFromMobile
{
    function settingDataFromMobile($bean, $event, $arguments)
    {
        if($_SESSION['platform']=='mobile'){
            if(count($bean->products->beans)>0){
                //Checar si el producto ya cuenta con quote_id
                foreach ($bean->products->beans as $clave=>$valor){
                    $id_product=$clave;
                    if(empty($bean->products->beans[$id_product]->quote_id)){

                        //Generar la relación entre Products y Quotes para simular la petición bulk establecida en
                        //modules/Quotes/clients/base/layouts/quote-data-list-groups/quote-data-list-groups.js::_checkProductsQuoteLink::379
                        $beanProduct=BeanFactory::getBean('Products',$id_product);
                        if(!empty($beanProduct)){
                            if($beanProduct->load_relationship('quotes')){
                                //id_quote = $bean->new_rel_id
                                $beanProduct->quotes->add($bean->new_rel_id);
                            }

                        }

                    }

                }

            }

        }

    }
}
?>