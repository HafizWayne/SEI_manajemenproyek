package com.example.proyek_management.model;

import jakarta.persistence.*;
import lombok.Data;
import java.time.LocalDateTime;

@Entity
@Table(name = "lokasi")
@Data
public class Lokasi {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String namaLokasi;
    private String negara;
    private String provinsi;
    private String kota;
    private LocalDateTime createdAt = LocalDateTime.now();
}
