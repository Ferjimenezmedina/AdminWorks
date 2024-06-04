Imports System.IO

Public Class EjemploGuardarArchivoEnServidor
    Public Shared Sub GuardarArchivoEnServidor()
        ' Contenido del archivo a guardar
        Dim contenidoArchivo As String = "Este es el contenido del archivo que quiero guardar en el servidor."

        ' Ruta de la carpeta en el servidor donde deseas guardar el archivo
        Dim rutaCarpetaServidor As String = HttpContext.Current.Server.MapPath("~/CarpetaDestino/")

        ' Nombre del archivo
        Dim nombreArchivo As String = "archivo.txt"

        ' Combina la ruta de la carpeta del servidor con el nombre del archivo
        Dim rutaDestino As String = Path.Combine(rutaCarpetaServidor, nombreArchivo)

        Try
            ' Crea el archivo en la carpeta del servidor
            File.WriteAllText(rutaDestino, contenidoArchivo)

            ' Mensaje de éxito
            Console.WriteLine("El archivo se ha guardado en el servidor correctamente.")
        Catch ex As Exception
            ' Manejo de errores
            Console.WriteLine("Error al intentar guardar el archivo en el servidor: " & ex.Message)
        End Try
    End Sub
End Class
