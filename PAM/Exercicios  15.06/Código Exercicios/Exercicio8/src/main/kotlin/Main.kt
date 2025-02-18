fun main(args: Array<String>) {
    println("Digite o salário do funcionario: ")
    val sal = readLine()?.toFloatOrNull()

    if (sal != null){
        val aumento: Float = 15f / 100f
        val imposto: Float = 8f / 100f

        val salAtual = sal + (sal * aumento)
        val salFinal = salAtual - (salAtual * imposto)

        println("O salário ínicial é: R$ $sal")
        println("O salário com aumento é: R$ $salAtual")
        println("O salário final é: R$ $salFinal")
    }
}