from django.shortcuts import render
import json

import hashlib

from django.contrib.auth.mixins import PermissionRequiredMixin
from django.shortcuts import redirect
from django.urls import reverse
from django.views.generic import CreateView, FormView, ListView
from django.views.generic.detail import SingleObjectMixin, DetailView
from .models import Info
from .forms import Information
from django.http import HttpResponse

# Create your views here.
def home(request):
        if request.method == 'POST':
                form = Info()
                msg = request.POST.get('Information')
                files = request.FILES.get('File_n')
                form.msg = msg
                form.files = files
                form.save()
                return HttpResponse("Thanks for Contact")
        else:
                return render(request, 'anonymous/index.html')
