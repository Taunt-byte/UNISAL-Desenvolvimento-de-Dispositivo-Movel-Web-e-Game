import 'package:flutter/material.dart';

class Agenda extends StatefulWidget {
  @override
  _AgendaState createState() => _AgendaState();
}

class _AgendaState extends State<Agenda> {
  @override
  Future<void> botaoFuturo = Future.value();

  Widget build(BuildContext context) {
    return Center(
      child: Column(
        children: [
          Container(
            alignment: Alignment.bottomCenter,
            padding: EdgeInsets.only(top: 150),
            child: Column(
              children: [
                FutureBuilder(
                  future: botaoFuturo,
                  builder: (context, snapshot) {
                    return ElevatedButton(
                      child: const Text('Clique aqui!'),
                      style: ElevatedButton.styleFrom(elevation: 8.0),
                      onPressed:
                          snapshot.connectionState == ConnectionState.done
                              ? () => CliqueAquiMain(context)
                              : null,
                    );
                  },
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }

  void CliqueAquiMain(BuildContext context) {
    //var clique =

    var snackBar = SnackBar(
      content: Text('O botão foi clicado!'),
    );
    ScaffoldMessenger.of(context).showSnackBar(snackBar);

    exibirDialogo();
  }

  void exibirDialogo() {
    AlertDialog alerta = AlertDialog(
      title: Text("Título do Alert"),
      content: Text('Conteúdo do Alert'),
    );

    showDialog(
      context: context,
      builder: (BuildContext context) {
        return alerta;
      },
    );
  }
}
