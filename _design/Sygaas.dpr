program Sygaas;

uses
  Forms,
  ULogin in 'ULogin.pas' {FLogin},
  UMenu in 'UMenu.pas' {FMenu},
  UBiodata in 'UBiodata.pas' {FBiodata},
  UMenuPegawai in 'UMenuPegawai.pas' {FMenuPegawai},
  UAbsensi in 'UAbsensi.pas' {FAbsensi},
  USKP in 'USKP.pas' {FSKP},
  UDataSKP in 'UDataSKP.pas' {FDataSKP},
  UKegLain in 'UKegLain.pas' {FKegLain},
  USuratMasuk in 'USuratMasuk.pas' {FSuratMasuk},
  UMenuSurat in 'UMenuSurat.pas' {FMenuSurat},
  USuratKeluar in 'USuratKeluar.pas' {FSuratKeluar},
  URekapSurat in 'URekapSurat.pas' {FRekapSurat},
  UGrafikSurat in 'UGrafikSurat.pas' {FGrafikSurat},
  UNotaDinas in 'UNotaDinas.pas' {FNotaDinas},
  UAgendaRapat in 'UAgendaRapat.pas' {FAgendaRapat},
  URiwayatPegawai in 'URiwayatPegawai.pas' {FRiwayatPegawai},
  URiwayatPendidikan in 'URiwayatPendidikan.pas' {FRIwayatPendidikan},
  UDiklat in 'UDiklat.pas' {FDiklat},
  UDaftarUnd in 'UDaftarUnd.pas' {FDaftarUnd};

{$R *.res}

begin
  Application.Initialize;
  Application.CreateForm(TFLogin, FLogin);
  Application.CreateForm(TFMenu, FMenu);
  Application.CreateForm(TFBiodata, FBiodata);
  Application.CreateForm(TFMenuPegawai, FMenuPegawai);
  Application.CreateForm(TFAbsensi, FAbsensi);
  Application.CreateForm(TFSKP, FSKP);
  Application.CreateForm(TFDataSKP, FDataSKP);
  Application.CreateForm(TFKegLain, FKegLain);
  Application.CreateForm(TFSuratMasuk, FSuratMasuk);
  Application.CreateForm(TFMenuSurat, FMenuSurat);
  Application.CreateForm(TFSuratKeluar, FSuratKeluar);
  Application.CreateForm(TFRekapSurat, FRekapSurat);
  Application.CreateForm(TFGrafikSurat, FGrafikSurat);
  Application.CreateForm(TFNotaDinas, FNotaDinas);
  Application.CreateForm(TFAgendaRapat, FAgendaRapat);
  Application.CreateForm(TFRiwayatPegawai, FRiwayatPegawai);
  Application.CreateForm(TFRIwayatPendidikan, FRIwayatPendidikan);
  Application.CreateForm(TFDiklat, FDiklat);
  Application.CreateForm(TFDaftarUnd, FDaftarUnd);
  Application.Run;
end.
