fun main(args: Array<String>) {
    println("Digite um dia: ")
    val dia = readLine()?.toIntOrNull()

    println("Digite um mês: ")
    val mes = readLine()?.toIntOrNull()

    if (dia != null && mes != null){

        //verifica se o valor de dia vai de 1 a 30 e se o valor do mes vai de 1 a 12
        if (dia in 1..30 && mes in 1..12) {
            val qntddias = (mes-1) * 30 + dia
            println("Dias passados desde o início do ano: $qntddias")
        }
    }
}