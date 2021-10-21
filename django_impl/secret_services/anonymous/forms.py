from django.forms import ModelForm, fields
from .models import Info
from django import forms

def Information(ModelForm):
        class Meta:
                model = Info
                fields = ['msg','files']
        widgets = {
                'msg': forms.TextInput(attrs={'class':'form-control'}),
                'files': forms.FileInput(attrs={'class':'form-control-file'})
        }