import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      routes: {'/detail': (context) => DetailPage()},
      home: HomePage(),
    );
  }
}

class HomePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text("Home")),
      body: Center(
        child: ElevatedButton(
          onPressed: () {
            Navigator.pushNamed(context, '/detail');
          },
          child: Text("Lihat Detail Produk"),
        ),
      ),
    );
  }
}

class DetailPage extends StatefulWidget {
  @override
  _DetailPageState createState() => _DetailPageState();
}

class _DetailPageState extends State<DetailPage> {
  String? selectedGender;
  String? selectedCountry;

  List<String> genderList = ["Laki-laki", "Perempuan"];

  List<String> countryList = ["Indonesia", "Malaysia", "Singapura", "Thailand"];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text("Detail")),
      body: Padding(
        padding: EdgeInsets.all(20),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            // Dropdown Jenis Kelamin
            DropdownButtonFormField<String>(
              decoration: InputDecoration(
                labelText: "Jenis Kelamin",
                border: OutlineInputBorder(),
              ),
              value: selectedGender,
              items: genderList.map((String gender) {
                return DropdownMenuItem<String>(
                  value: gender,
                  child: Text(gender),
                );
              }).toList(),
              onChanged: (String? value) {
                setState(() {
                  selectedGender = value;
                });
              },
            ),

            SizedBox(height: 20),

            // Dropdown Negara
            DropdownButtonFormField<String>(
              decoration: InputDecoration(
                labelText: "Negara",
                border: OutlineInputBorder(),
              ),
              value: selectedCountry,
              items: countryList.map((String country) {
                return DropdownMenuItem<String>(
                  value: country,
                  child: Text(country),
                );
              }).toList(),
              onChanged: (String? value) {
                setState(() {
                  selectedCountry = value;
                });
              },
            ),

            Text("Halaman Detail Produk", style: TextStyle(fontSize: 18)),
          ],
        ),
      ),
    );
  }
}
