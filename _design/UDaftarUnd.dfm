object FDaftarUnd: TFDaftarUnd
  Left = 190
  Top = 140
  Width = 591
  Height = 541
  Caption = 'Form Undangan'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 16
    Top = 16
    Width = 29
    Height = 13
    Caption = 'SKPD'
  end
  object Label2: TLabel
    Left = 16
    Top = 40
    Width = 65
    Height = 13
    Caption = 'Kepala SKPD'
  end
  object Label3: TLabel
    Left = 16
    Top = 64
    Width = 36
    Height = 13
    Caption = 'Instansi'
  end
  object Label4: TLabel
    Left = 16
    Top = 88
    Width = 49
    Height = 13
    Caption = 'Nomor HP'
  end
  object Label5: TLabel
    Left = 16
    Top = 160
    Width = 48
    Height = 13
    Caption = 'Pencarian'
  end
  object Label6: TLabel
    Left = 96
    Top = 192
    Width = 180
    Height = 13
    Caption = 'Ketika di tekan enter masukkan ke list'
  end
  object Label7: TLabel
    Left = 232
    Top = 88
    Width = 163
    Height = 13
    Caption = '( untuk no hp input khusus admin )'
  end
  object Label8: TLabel
    Left = 232
    Top = 104
    Width = 189
    Height = 13
    Caption = '( no hp hnya ditampilkan khusus admin )'
  end
  object Button1: TButton
    Left = 208
    Top = 128
    Width = 75
    Height = 25
    Caption = 'Tambah'
    TabOrder = 0
  end
  object Button2: TButton
    Left = 288
    Top = 128
    Width = 75
    Height = 25
    Caption = 'Edit'
    TabOrder = 1
  end
  object Button3: TButton
    Left = 368
    Top = 128
    Width = 75
    Height = 25
    Caption = 'Delete'
    TabOrder = 2
  end
  object Edit1: TEdit
    Left = 104
    Top = 16
    Width = 121
    Height = 21
    TabOrder = 3
    Text = 'Edit1'
  end
  object Edit2: TEdit
    Left = 104
    Top = 40
    Width = 121
    Height = 21
    TabOrder = 4
    Text = 'Edit1'
  end
  object Edit3: TEdit
    Left = 104
    Top = 64
    Width = 121
    Height = 21
    TabOrder = 5
    Text = 'Edit1'
  end
  object Edit4: TEdit
    Left = 104
    Top = 88
    Width = 121
    Height = 21
    TabOrder = 6
    Text = 'Edit1'
  end
  object Edit5: TEdit
    Left = 104
    Top = 160
    Width = 121
    Height = 21
    TabOrder = 7
    Text = 'Edit1'
  end
  object ComboBox1: TComboBox
    Left = 232
    Top = 160
    Width = 121
    Height = 21
    ItemHeight = 13
    TabOrder = 8
    Text = 'ComboBox1'
    Items.Strings = (
      'SKPD'
      'Ka. SKPD'
      'Instansi'
      'No. HP')
  end
  object DBGrid1: TDBGrid
    Left = 16
    Top = 208
    Width = 545
    Height = 282
    TabOrder = 9
    TitleFont.Charset = DEFAULT_CHARSET
    TitleFont.Color = clWindowText
    TitleFont.Height = -11
    TitleFont.Name = 'MS Sans Serif'
    TitleFont.Style = []
  end
  object Button4: TButton
    Left = 368
    Top = 160
    Width = 75
    Height = 25
    Caption = 'Pilih'
    TabOrder = 10
  end
end
