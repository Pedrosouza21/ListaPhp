   <?php 
    echo "Segundo Exercício- Calcule a área e o perímetro desejados adicionando os valores pedidos:";
    $L=0;
    $C=0;
    $total1=0;
    $total2=0;
   
    echo "Digite o valor da Largura: ";
    $L =(int)readLine();
    echo "Digite o valor do Comprimento: ";
    $C =(int)readLine();
    
    $total1 = $L * $C;
    $total2 = 2 * ($L+$C);
    echo "Resultado: Área igual ".$total1.", Perímetro igual a ".$total2."";?>