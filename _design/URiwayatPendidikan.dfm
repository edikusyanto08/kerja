object FRIwayatPendidikan: TFRIwayatPendidikan
  Left = 497
  Top = 198
  Width = 454
  Height = 480
  Caption = 'FRIwayatPendidikan'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object GroupBox1: TGroupBox
    Left = 21
    Top = 16
    Width = 393
    Height = 145
    Caption = 'Data'
    TabOrder = 0
    object Label1: TLabel
      Left = 16
      Top = 24
      Width = 48
      Height = 13
      Caption = 'No. Ijazah'
    end
    object Label2: TLabel
      Left = 16
      Top = 48
      Width = 31
      Height = 13
      Caption = 'Tahun'
    end
    object Label3: TLabel
      Left = 16
      Top = 72
      Width = 16
      Height = 13
      Caption = 'File'
    end
    object Edit1: TEdit
      Left = 120
      Top = 24
      Width = 233
      Height = 21
      TabOrder = 0
      Text = 'Edit1'
    end
    object Button1: TButton
      Left = 184
      Top = 104
      Width = 57
      Height = 25
      Caption = 'Simpan'
      TabOrder = 1
    end
    object Button2: TButton
      Left = 248
      Top = 104
      Width = 57
      Height = 25
      Caption = 'Edit'
      TabOrder = 2
    end
    object Button3: TButton
      Left = 312
      Top = 104
      Width = 56
      Height = 25
      Caption = 'Hapus'
      TabOrder = 3
    end
    object Edit2: TEdit
      Left = 120
      Top = 48
      Width = 233
      Height = 21
      TabOrder = 4
      Text = 'Edit1'
    end
    object Edit3: TEdit
      Left = 120
      Top = 72
      Width = 185
      Height = 21
      TabOrder = 5
      Text = 'Edit1'
    end
    object Button4: TButton
      Left = 312
      Top = 72
      Width = 57
      Height = 25
      Caption = 'Browse'
      TabOrder = 6
    end
  end
  object DBGrid1: TDBGrid
    Left = 22
    Top = 176
    Width = 392
    Height = 243
    TabOrder = 1
    TitleFont.Charset = DEFAULT_CHARSET
    TitleFont.Color = clWindowText
    TitleFont.Height = -11
    TitleFont.Name = 'MS Sans Serif'
    TitleFont.Style = []
    Columns = <
      item
        Expanded = False
        Title.Caption = 'No'
        Width = 30
        Visible = True
      end
      item
        Expanded = False
        Title.Caption = 'No. SK'
        Width = 150
        Visible = True
      end>
  end
end
