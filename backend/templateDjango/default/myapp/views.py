<<<<<<< HEAD
from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'myapp/index.html')

def about(request):
=======
from django.shortcuts import render

# Create your views here.
def index(request):
    return render(request, 'myapp/index.html')

def about(request):
>>>>>>> b6e2c62c6a4a20d8ec1f6a20c963324b21fa9d7a
    return render(request, 'myapp/about.html')