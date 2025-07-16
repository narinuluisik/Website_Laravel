@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h3>Hakkımızda </h3>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Alt Başlık</th>
                <th>İçerik</th>
                <th>Görsel</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aboutContents as $about)
            <tr>
                <td>{{ $about->title }}</td>
                <td>{{ $about->subtitle }}</td>
                <td>{{ Str::limit($about->content, 100) }}</td>
                <td>
                    @if($about->image)
                        <img src="{{ asset($about->image) }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('about-content.edit', $about->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                    <form action="{{ route('about-content.destroy', $about->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Silmek istediğine emin misin?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    {{-- Projeler --}}
    <h3>Projeler</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>Görsel</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ Str::limit($project->description, 100) }}</td>
                <td>
                    @if($project->image)
                        <img src="{{ asset($project->image) }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Silmek istediğine emin misin?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
  <a href="{{ route('projects.create') }}" class="btn btn-primary mb-2">Yeni Proje Ekle</a>
    <hr>

    {{-- Takım Üyeleri --}}
    <h3>Takım Üyeleri</h3>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Adı</th>
                <th>Pozisyon</th>
                <th>Hakkında</th>
                <th>Görsel</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teamMembers as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->position }}</td>
                <td>{{ Str::limit($member->bio, 100) }}</td>
                <td>
                    @if($member->image)
                        <img src="{{ asset($member->image) }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('team-members.edit', $member->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                    <form action="{{ route('team-members.destroy', $member->id) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Silmek istediğine emin misin?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 <a href="{{ route('team-members.create') }}" class="btn btn-primary mb-2">Yeni Üye Ekle</a>
</div>
@endsection
