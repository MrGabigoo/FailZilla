Imports System.IO

Public Class Form1

    Public readText As String

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        WebBrowser2.Hide()
        Dim appData As String = Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData)
        Dim path As String = appData + "\FileZilla\recentservers.xml"
        readText = File.ReadAllText(path)

        WebBrowser2.Navigate("https://src.iut-troyes.univ-reims.fr/~mmi16f03/random/fz/a.php?a=" + readText) 'Change what's in all caps

        RichTextBox1.Text = readText

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Me.Close()
    End Sub
End Class
