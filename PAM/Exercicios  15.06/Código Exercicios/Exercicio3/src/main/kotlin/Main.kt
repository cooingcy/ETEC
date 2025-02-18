fun main() {
    println("Digite o número de algum mês: ")
    val mes = readLine()?.toIntOrNull()

    when(mes){
        1 ->println("Janeiro $mes")
        2 ->println("Fevereiro $mes")
        3 ->println("Março $mes")
        4 ->println("Abril $mes")
        5 ->println("Maio $mes")
        6 ->println("Junho $mes")
        7 ->println("Julho $mes")
        8 ->println("Agosto $mes")
        9 ->println("Setembro $mes")
        10 ->println("Outubro $mes")
        11 ->println("Novembro $mes")
        12 ->println("Dezembro $mes")
        else -> println("Mês não existente")
    }
}