import kotlin.math.round

fun main() {
    println("Digite a hora de ínicio de seu turno: ")
    val hora = readLine()?.toFloatOrNull()
    if (hora != null) {
        if (hora >= 5.0 && hora <= 12.59) {
            println("Turno da manhã $hora")
        } else if (hora >= 13 && hora <= 20.59) {
            println("Turno da tarde $hora")
        } else if (hora < 5 || hora > 20.59) { // dois trços "||" operador lógico "ou"
            println("Turno da noite $hora")
        }
    }
}